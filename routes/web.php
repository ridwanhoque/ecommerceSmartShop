<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','WelcomeConroller@index');
Route::get('/category','WelcomeConroller@category');
Route::get('/single','WelcomeConroller@single');
Route::get('/contact','WelcomeConroller@contact');

//category
Route::get('/category/add','CategoryController@createCategory');
Route::post('/categorySave/','CategoryController@storeCategory');
Route::get('/category/manage','CategoryController@manageCategory');
Route::get('/category/edit/{id}','CategoryController@editCategory');
Route::post('/categoryUpdate/','CategoryController@updateCategory');
Route::get('/category/delete/{id}','CategoryController@deleteCategory');

//manufacturer
Route::get('/manufacturer/add','ManufacturerController@createManufacturer');
Route::post('/manufacturerSave/','ManufacturerController@storeManufacturer');
Route::get('/manufacturer/manage','ManufacturerController@manageManufacturer');
Route::get('/manufacturer/edit/{id}','ManufacturerController@editManufacturer');
Route::post('/manufacturerUpdate/','manufacturerController@updateManufacturer');
Route::get('/manufacturer/delete/{id}','manufacturerController@deleteManufacturer');

/*
Route::get('/test', function () {
    //return view('demo');
    //
    //return resource_path('views');
    //return "user";
    
//    $data = 
//       [
//           '0'=>
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
//    return $data;
    
});
*/





//
//Route::get('',function(){
//    
//    
//});
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
