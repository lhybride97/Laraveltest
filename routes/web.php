<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PictureController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', 'ProductController@index')->name('product.index');
Route::get('create', 'ProductController@create')->name('product.create');
Route::post('store', 'ProductController@store')->name('product.store');
Route::delete('delete', 'ProductController@destroy')->name('product.destroy');
Route::get('/show/{slug}', 'ProductController@show')->name('product.show');
Route::put('/edit', 'ProductController@edit')->name('product.edit');


// Route::post('/photo', 'PictureController@store')->name('store'); // Laravel 8

 Route::get('/image-upload', 'FileUpload@createForm');

Route::post('/image-upload', 'FileUpload@fileUpload')->name('imageUpload');

// Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');


// Route::get('upload', 'UploadImageController@index');
// Route::post('save', ' images@save');



Route::get('imageupload', 'ImageUploadController@imageUpload')->name('imageupload');
Route::post('imageupload', 'ImageUploadController@imageUploadPost')->name('imageuploadpost');
Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
