<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeCampaign;
use App\Http\Controllers\AddCampaign;
use App\Http\Controllers\KategoriController;


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


// Route::get('/org/addcampaign', [CampaignController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::resource('/org', HomeCampaign::class);
Route::resource('/addcampaign', AddCampaign::class);

Route::resource('/kategori/campaign', KategoriController::class);

//Category Using AJAX Request
Route::get('kategori', [kategoriController::class, 'index'])->name('category.index');
Route::get('read', [KategoriController::class, 'read']);
Route::get('create', [KategoriController::class, 'create']);
Route::get('store', [KategoriController::class, 'store']);
Route::get('/show/{kode_kategori}', [KategoriController::class, 'show']);
Route::get('/update/{kode_kategori}', [KategoriController::class, 'update']);
Route::get('/hapus/{kode_kategori}', [KategoriController::class, 'hapus']);
Route::get('/destroy/{kode_kategori}', [KategoriController::class, 'destroy']);
