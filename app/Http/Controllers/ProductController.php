<?php

namespace smart_shop\Http\Controllers;

use Illuminate\Http\Request;
use smart_shop\Category;
use smart_shop\Manufacturer;
use smart_shop\Product;
use DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller {

    //
    protected $image_url;

    public function createProduct() {
        $categories = Category::where('publication_status', 1)->get();
        $manufacturers = Manufacturer::where('publication_status', 1)->get();

        return view('admin.product.productContent', ['categories' => $categories, 'maufacturers' => $manufacturers]);
    }

    public function storeProduct(Request $request) {

        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required'
        ]);

        $product_image = $request->file('product_image');

        $getImageUrl = $this->getImageUrl($product_image);




        $this->save_product_info($request, $getImageUrl);

        return redirect('/product/add/')->with('message', 'Product Add Success!');
    }

    protected function getImageUrl($product_image) {
        //image name must be same as product name
        $image_name = $product_image->getClientOriginalName();
        $upload_path = "public/product_image/";
        $product_image->move($upload_path, $image_name);
        $image_url = $upload_path . $image_name;

        return $image_url;
    }

    protected function save_product_info($request, $image_url) {

        $product = new Product;
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->product_image = $image_url;
        $product->publication_status = $request->publication_status;

        $product->save();
    }

    public function manageProduct() {
        $products = DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->join('manufacturers', 'products.manufacturer_id', '=', 'manufacturers.id')
                ->select('products.*', 'categories.category_name', 'manufacturers.manufacturer_name')
                ->get();
        //  $products = Product::all();

        return view("admin.product.manageProductContent", ['products' => $products]);
    }

    public function editProduct($id) {

        $productById = Product::where('id', $id)->first();
        $activeCategories = Category::where('publication_status', 1)->get();
        $activeManufacturers = Manufacturer::where('publication_status', 1)->get();

        return view('admin.product.editProductContent', [
            'productById' => $productById,
            'activeCategories' => $activeCategories,
            'activeManufacturers' => $activeManufacturers
        ]);
    }

    public function viewProduct($id) {
        $productById = DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->join('manufacturers', 'products.manufacturer_id', '=', 'manufacturers.id')
                ->where('products.id', $id)
                ->select('products.*', 'categories.category_name', 'manufacturers.manufacturer_name')
                ->first();

        return view('admin.product.viewProductContent', ['product' => $productById]);
    }

    public function updateProduct(Request $request) {

        $product = Product::where('id', $request->id)->first();

        if ($request->file('product_image') != "") {
            $product_image = $request->file('product_image');
            $image_url = $this->getImageUrl($product_image);
            $product->product_image = $image_url;

            $product->product_image = $image_url;
            
        }

        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->publication_status = $request->publication_status;

        $product->save();

        return redirect('/product/manage/')->with('message', 'Product Update Success!');
    }
    
    public function deleteProduct($id){
        $productById = Product::where('id',$id)->first();
        
        $productById->delete();
        
        return redirect('/product/manage/')->with('message','Product Delete Success!');
    }

}
