<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
})->name('landingpage');

// Auth
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


// route masyarakat
Route::get('/pengaduans', 'MasyarakatController@pengaduan')->name('dashboardmasyarakat');
Route::get('/pengaduan/list/{nik}', 'MasyarakatController@index')->name('listpengaduan');
route::post('/pengaduan/store','MasyarakatController@store')->name('nulispengaduan');

// route admin
Route::get('/admin', 'HomeController@dashboardAdmin')->name('dashboardadmin');
Route::get('/admin/user', 'AdminController@user')->name('listuser');
Route::get('/admin/pengaduan', 'AdminController@pengaduan')->name('listpengaduanadmin');
Route::get('/admin/tanggapan', 'AdminController@tanggapan')->name('listtanggapan');
Route::get('/admin/beritanggapan/{id}', 'AdminController@beritanggapan')->name('beritanggapan');
Route::post('/admin/submittanggapan', 'AdminController@submittanggapan')->name('submittanggapan');


// route petugas
Route::get('/petugas', 'HomeController@dashboardPetugas')->name('dashboardpetugas');

// route generate pdf
Route::get('/getpdf', 'GenerateController@generatePDF')->name('pdfgenerate');
Route::get('/viewpdf', 'GenerateController@view')->name('viewgenerate');