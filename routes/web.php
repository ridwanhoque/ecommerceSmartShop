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
Route::get('/categoryView/{id}','WelcomeConroller@category');
Route::get('/single/{id}','WelcomeConroller@single');
Route::get('/contact','WelcomeConroller@contact');


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

Route::group(['middleware'=>'authuser'], function(){

    Route::get('/dashboard', 'HomeController@index')->name('home');

    //category
    Route::get('/category/add','CategoryController@createCategory')->middleware('authuser');
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


    //product
    Route::get('/product/add/','ProductController@createProduct');
    Route::post('/productSave/','ProductController@storeProduct');
    Route::get('/product/manage/','ProductController@manageProduct');
    Route::get('/product/edit/{id}','ProductController@editProduct');
    Route::get('/product/view/{id}','ProductController@viewProduct');
    Route::post('/productUpdate/','ProductController@updateProduct');
    Route::get('/product/delete/{id}','ProductController@deleteProduct');
    
    //user
    Route::get('/user/add/','UserController@createUser');
    Route::get('/user/manage/','UserController@manageUser');
    Route::post('/userSave/','UserController@storeUser');
    Route::get('/user/edit/{id}','UserController@editUser');
    Route::post('/userUpdate/','UserController@updateUser');
    Route::get('/user/delete/{id}','UserController@deleteUser');
    
    
});
