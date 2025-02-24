<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

// /*2. Routing*/ 
// /*Basic Routing*/ 
// Route::get('/hello', function (){
//     return 'Hello World';
// });

// Route::get('/World', function (){
//     return 'World';
// });

// Route::get('/', function (){
//     return 'Selamat Datang';
// });

// Route::get('/about', function (){
//     return '2341720216 Golden Christian Gondo';
// });

// /*Route Paramaters*/ 
// Route::get('/user/{name}', function ($name){
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id){
//     return 'Halaman Artikel dengan ID '.$id;
// });

// /*Optional Paramaters*/ 
// Route::get('/user/{name?}', function ($name=null){
//     return 'Nama saya '.$name;
// });

// Route::get('/user/{name?}', function ($name='John'){
//     return 'Nama saya '.$name;
// });

// /*Route Name*/ 
// Route::get('/user/profile', function() {
//     //
// })->name('profile');

// /*Route Group dan Route Prefixes*/ 
// // Route Group
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

// Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });
       
// // Route Prefixes
// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
//     });
    
// /*Redirect Routes*/
// Route::redirect('/here', '/there');

// /*View Routes*/ 
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

/*3. Controller*/ 
/*Membuat Controller*/ 
use App\Http\Controllers\WelcomeController;
Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);

/*Resource Controller*/ 
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
   

/*4. View*/ 
/*Membuat View*/ 
use App\resources\view\hello;
Route::get('/greeting', [WelcomeController::class, 'greeting']);


