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
}
