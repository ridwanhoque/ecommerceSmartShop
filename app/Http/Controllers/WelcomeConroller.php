<?php

namespace smart_shop\Http\Controllers;

use Illuminate\Http\Request;
use smart_shop\Providers\AppServiceProvider;
use smart_shop\Product;

class WelcomeConroller extends Controller
{
    //
    
    public function index(){
        //return 'Welcome';
        
//         $data = 
//       [
//            '0'=>
//                [
//                    'name'  =>  'rahim',
//                    'age'   =>  '18'
//                ],
//            '1' =>
//                [
//                    'name'   =>  'karim',
//                    'age'    =>  '20'
//                ]
//       ];
    //return $data;
    //return view("demo", compact("data"));  
    //return view("demo", ['data'=>$data]);  
    //return view("demo")->with('data',$data);  
    
        
        
        
        $activeProducts = Product::where('publication_status',1)->get();
         return view('frontEnd.home.homeContent',['activeProducts'=>$activeProducts]);
         
    }
    
    public function category($id) {
        $activeProductsByCategory = Product::where('category_id',$id)
                ->where('publication_status',1)
                ->get();
        
        return view('frontEnd.category.categoryContent',['activeProductsByCategory'=>$activeProductsByCategory]);
    }
    
    public function contact() {
        return view('frontEnd.contact.contactContent');
    }
    
    public function single($id) {
        $singleProduct = Product::where('id',$id)->first();
        return view('frontEnd.single.singleContent',['singleProduct'=>$singleProduct]);
    }
    
    
    
}
