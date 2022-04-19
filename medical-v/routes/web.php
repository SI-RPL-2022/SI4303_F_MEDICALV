<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeCampaign;
use App\Http\Controllers\AddCampaign;
use App\Http\Controllers\TelusuriCampaignController;
use App\Http\Controllers\DetailCampaignController;
use App\Http\Controllers\RegistCampaignController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DaftarCampaignSuksesController;


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
    return view('home');
});

// Route::get('/org/addcampaign', [CampaignController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::resource('/org', HomeCampaign::class);
Route::resource('/addcampaign', AddCampaign::class);
Route::get('/telusuricampaign', [TelusuriCampaignController::class, 'telusuricampaign']);
Route::get('/detailcampaign/{id}', [DetailCampaignController::class, 'detailcampaign']);
Route::get('/registcampaign/{id}', [RegistCampaignController::class, 'registcampaign']);
Route::get('/daftarcampaignsukses', [DaftarCampaignSuksesController::class, 'daftarcampaignsukses']);
Route::resource('/addkategori', KategoriController::class);
Route::get('/kategori', function() {
    return view('kategori.index'); 
});
Route::resource('/kategori/campaign', KategoriController::class);
