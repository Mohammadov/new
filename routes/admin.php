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

Route::get('/', function () {
    return view('welcome');
});
route::get('mom',function(){
    return 'ayouma';
})->name('a')->middleware('auth');

route::get('ahmad/{id?}',function(){
    return'abu5ara';
})->name('b');

route::get('saleh/{id}',function($id){
    return 'ahmadawad';
});

route::get('admin','AdminViewCotroller@getAdminView');
route::group(['namespace'=>'front'],function(){
   route::get('num','UserController@getMyNum');
   route::get('id','UserController@getMyId');
});
route::get('sis','front\UserController@getMySis');
route::resource('res','ResourceController');
route::get('landing','front\UserController@getLanding');

