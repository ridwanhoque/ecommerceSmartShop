<?php

namespace smart_shop\Http\Controllers;

use Illuminate\Http\Request;
use smart_shop\Providers\AppServiceProvider;

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
    
         return view('frontEnd.home.homeContent');
         
    }
    
    public function category() {
        return view('frontEnd.category.categoryContent');
    }
    
    public function contact() {
        return view('frontEnd.contact.contactContent');
    }
    
    public function single() {
        return view('frontEnd.single.singleContent');
    }
    
    
    
}
