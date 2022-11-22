<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\Category1Controller;





// Route::resource('crud', CRUDController::class);
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

Route::group(['middleware'=>['auth']],function(){

// Route::get('/student',[StudentController::class, 'index']);


Route::get('/student','App\Http\Controllers\StudentController@index')
    ->name('Student.home');


Route::get('crud/create','App\Http\Controllers\CRUDController@create')
    ->name('CRUD.create');
Route::get('crud/index','App\Http\Controllers\CRUDController@index')
->name('CRUD.index');

 Route::post('crud','App\Http\Controllers\CRUDController@store')
    ->name('CRUD.store');

Route::get('crud/{id}/edit','App\Http\Controllers\CRUDController@edit')->name('CRUD.edit');

Route::patch('crud/{CRUD_id}','App\Http\Controllers\CRUDController@update')->name('CRUD.update');

Route::delete('crud/{CRUD_id}','App\Http\Controllers\CRUDController@destroy')->name('CRUD.destroy');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('cat/create','App\Http\Controllers\Category1Controller@create')
    ->name('Category1.create');
Route::post('cat','App\Http\Controllers\Category1Controller@store')
    ->name('Category1.store');
Route::delete('cat/{Category1_id}','App\Http\Controllers\Category1Controller@destroy')->name('Category1.destroy');

Route::get('cat/{id}/edit','App\Http\Controllers\Category1Controller@edit')->name('Category1.edit');

Route::patch('cat/{Category1_id}','App\Http\Controllers\Category1Controller@update')->name('Category1.update');

Route::get('cate/create','App\Http\Controllers\CategoryController@create')
    ->name('Category.create');
Route::post('cate','App\Http\Controllers\CategoryController@store')
    ->name('Category.store');
Route::delete('cate/{Category_id}','App\Http\Controllers\CategoryController@destroy')->name('Category.destroy');
Route::get('cate/{id}/edit','App\Http\Controllers\CategoryController@edit')->name('Category.edit');

Route::patch('cate/{Category1_id}','App\Http\Controllers\CategoryController@update')->name('Category.update');
});
Auth::routes();