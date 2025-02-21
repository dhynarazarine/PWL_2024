<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
// mengimpor kelas ItemController dari namespace, kita bisa menggunakan ItemController dalam file routing Laravel

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('items', ItemController::class);
// Route::resource metode yang secara otomatis berdasarkan metode yang ada di ItemController

// Route Hello
Route::get('/hello', function () {
        return 'Hello World';
});
// Route World
Route::get('/world', function () {
        return 'World';
});
// Route '/'
Route::get('/', function () {
        return 'Selamat Datang';
});
// Route about
Route::get('/about', function () {
        return 'NIM : 2341760109, Nama : Queenadhynar Azarine Dwipa Andiyani';
});


// Route username
Route::get('/user/{name}', function ($name) {
        return 'Nama saya '.$name;
  });

// Route dengan 1 parameter lebih
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route Halaman Artikel
Route::get('/articles/{id}', function ($id) {
        return 'Halaman Artikel dengan ID '.$id;
  });

// Route User
Route::get('/user/{name?}', function ($name="John") {
        return 'Nama saya  '.$name;
  });