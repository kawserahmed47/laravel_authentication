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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/invoice', function () {
//     return view('viewApplication');
// });

// Route::get('/viewInvoice', function () {
//     return view('viewInvoice');
// });
// Route::get('/printInvoice', function () {
//     return view('printInvoice');
// });

Route::get('/','HomeController@index')->name('index');
Route::get('/viewApplication', 'HomeController@viewApplication')->name('viewApplication');
Route::get('/viewInvoice/{id}', 'HomeController@viewInvoice')->name('viewInvoice');
Route::get('/printInvoice/{id}', 'HomeController@printInvoice')->name('printInvoice');
Route::get('/genrateExcel', 'HomeController@genrateExcel')->name('genrateExcel');

Route::get('/programs','ProgramsController@programs')->name('programs');
Route::post('/insertProgram','ProgramsController@insertProgram')->name('insertProgram');
Route::get('/editProgram/{id}','ProgramsController@editProgram')->name('editProgram');
Route::post('/updateProgram/{id}','ProgramsController@updateProgram')->name('updateProgram');
Route::get('/deleteProgram/{id}','ProgramsController@deleteProgram')->name('deleteProgram');
Route::get('/changeStatus/{id}','ProgramsController@changeStatus')->name('changeStatus');



Route::post('/insertApplication','ApplicationController@insertApplication')->name('insertApplication');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
