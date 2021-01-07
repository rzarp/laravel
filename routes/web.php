<?php

use Illuminate\Support\Facades\Route;

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

/* routing get dengan (/) agar nanti bisa default pada saat di run dengan prefix index */
Route::get('/','MyController@index')->name('index');
/* routing get dengan (/tentang) ketika di klik akan melempar kehalaman tersebut  dengan prefix about */
Route::get('/tentang','MyController@about')->name('about');
/* routing get dengan (/mahasiswa) ketika di klik akan melempar kehalaman tersebut  dengan prefix student.index */
Route::get('/mahasiswa','StudentController@index')->name('student.index');
/* routing get dengan (/mahasiswa/tambah) ketika di klik akan melempar kehalaman tersebut  dengan prefix student.create */
Route::get('/mahasiswa/tambah','StudentController@create')->name('student.create');
/* routing get dengan (/mahasiswa/tambah) ketika di klik akan melempar kehalaman tersebut dan mengepost ke db dengan prefix student.store */
Route::post('/mahasiswa/tambah','StudentController@store')->name('student.store');
/* routing get dengan (/mahasiswa/edit/{id}) ketika di klik akan melempar kehalaman tersebut dan mengedit per id dengan prefix student.edit */
Route::get('/mahasiswa/edit/{id}','StudentController@edit')->name('student.edit');
/* routing get dengan (/mahasiswa/edit/{id}) ketika di klik akan melempar kehalaman tersebut dan mengedit per id dengan prefix student.update */
Route::put('/mahasiswa/edit/{id}','StudentController@update')->name('student.update');
/* routing get dengan (/mahasiswa/hapus/{id}) ketika di klik akan melempar kehalaman tersebut dan menghapus per id dengan prefix student.destroy */
Route::delete('/mahasiswa/hapus/{id}','StudentController@destroy')->name('student.destroy');
Route::get('/mahasiswa/data','StudentController@data')->name('student.data');
Route::get('/mahasiswa/data/hapus/{id}','StudentController@data_destroy')->name('student.data.destroy');

