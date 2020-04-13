<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are lzoaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

//user

Route::prefix('mahasiswa')->group(function () {
    Route::get('/cekdata','DataController@Index')->middleware('auth','verified');
    Route::get('/pembayaran', 'PembayaranController@Create');
    Route::post('/pembayaran', 'PembayaranController@Store');
    
    
});



//admin
Route::prefix('admin')->group(function () {

    Route::get('/', 'AdminController@Home')->middleware('isadmin');
    Route::resource('/infopembayaran', 'PembayaranController')->middleware('isadmin');
    Route::resource('user', 'AdminController')->middleware('isadmin');

    Route::get('/cekdata', 'AdminController@index')->middleware('isadmin');
    Route::post('/tambahakun', 'AdminController@store')->middleware('isadmin');
    Route::get('/tambahakun', 'AdminController@create')->middleware('isadmin');
});




// // Route untuk menampilkan form upload
// Route::get('/upload','UploadController@upload');
 
// // // Route untuk menghandle proses upload
// Route::post('upload/proses','UploadController@proses_upload');
// // // Route untuk menghandle proses hapus
// Route::post('upload/hapus/$id','UploadController@hapus');





Route::get('/bantuan', function () {
    return view('bantuan');
});
Route::get('/about', function () {
    return view('about');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// use App\User;
// use App\infopembayaran;
// use App\jenispembayaran;
// Route::get('/coba', function () {
//     $data=infopembayaran::find(3)->jenispembayaran;//Auth::user()->name;
//     return $data;
//  });