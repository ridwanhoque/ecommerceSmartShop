<?php

namespace smart_shop\Http\Controllers;

use Illuminate\Http\Request;
use smart_shop\Category;

use DB;

class categoryController extends Controller
{
    //
    
    public function createCategory() {
        return view("admin.category.categoryContent");
    }
    
    public function storeCategory(Request $request) {
        
        $this->validate($request, [
            'category_name'=>'required',
            'category_description'=>'required'
        ]);
        
        //<First way of data save>
        //return $request->all();
//        $category = new Category();
//        $category->category_name = $request->category_name;
//        $category->category_description = $request->category_description;
//        $category->publication_status = $request->publication_status;
//        
//        $category->save();
//        
//        return "Category Info saved success!";
//        </First way of data save>
//        
        
        //<Second way of data save>
//        Category::create($request->all());
//        return "Category Info saved success!";
        
        
        //<third way : query builder>
      DB::table("categories")-> insert([
          'category_name'=>$request->category_name,
          'category_description'=>$request->category_description,
          'publication_status'=>$request->publication_status,
      ]);
      
      return redirect("/category/add/")->with("message","Category Info saved success!");
    
        
        
    }
    
    
    public function manageCategory() {
        $categories = Category::all();
        
        
        
        
        return view("admin.category.manageCategoryContent",["categories"=>$categories]);
    }
    
    public function editCategory($id){
        $categoryById = Category::where('id',$id)->first();
        
        return view('admin.category.editCategoryContent',['categoryById'=>$categoryById]);
    }
    
    public function updateCategory(Request $request){
        
        $this->validate($request, [
            'category_name'=>'required',
            'category_description'=>'required'
        ]);
        
        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        
        $category->save();
        
        return redirect('/category/manage/')->with('message','Category Update Success!');
    }
    
    
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        
        return redirect('/category/manage/')->with('message','Category Delete Success!');
        
    }
}
