<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LaporanCampaign;
use App\Http\Controllers\HomeCampaign;
use App\Http\Controllers\AddCampaign;
use App\Http\Controllers\TelusuriCampaignController;
use App\Http\Controllers\DetailCampaignController;
use App\Http\Controllers\RegistCampaignController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DaftarCampaignSuksesController;
use App\Http\Controllers\CampaignSayaController;
use App\Http\Controllers\CampaignAdminController;


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
Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'regist']);
Route::resource('/org', HomeCampaign::class);
Route::resource('/addcampaign', AddCampaign::class);
Route::get('/telusuricampaign', [TelusuriCampaignController::class, 'telusuricampaign']);
Route::get('/detailcampaign/{id}', [DetailCampaignController::class, 'detailcampaign']);
Route::get('/registcampaign/{id}', [RegistCampaignController::class, 'registcampaign']);
Route::get('/daftarcampaignsukses', [DaftarCampaignSuksesController::class, 'daftarcampaignsukses']);
Route::put('/daftarcampaignsukses/{id}', [DaftarCampaignSuksesController::class, 'storedaftarcampaignsukses']);
Route::resource('/addkategori', KategoriController::class);
Route::get('/kategori', function() {
    return view('kategori.index'); 
});
Route::resource('/kategori/campaign', KategoriController::class);
Route::get('/campaignsaya', [DaftarCampaignSuksesController::class, 'campaignsaya']);
Route::delete('/campaignsaya', [DaftarCampaignSuksesController::class, 'deletecampaignsaya']);
Route::get('/orgtemplate', function () {
    return view('organisasi.layout.layout');
});

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
Route::get('/', [App\Http\Controllers\Auth::class,'login'])->name('auth.login');

Route::get('/register', [App\Http\Controllers\Auth::class,'register']);
Route::post('/register', [App\Http\Controllers\Auth::class,'prosesRegister']);
Route::get('/login', [App\Http\Controllers\Auth::class,'login']);
Route::post('/login', [App\Http\Controllers\Auth::class,'prosesLogin']);
Route::get('/logout', [App\Http\Controllers\Auth::class,'logout']);

Route::get('/dashboard', [App\Http\Controllers\Dashboard::class,'index'])->name('dashboard')->middleware('login');

Route::get('/dashboardadmin', [CampaignAdminController::class, 'index']);
Route::get('/create', [CampaignAdminController::class, 'create']);
Route::post('/store', [CampaignAdminController::class, 'store']);
Route::get('/show/{id}', [CampaignAdminController::class, 'show']);
Route::post('/update/{id}', [CampaignAdminController::class, 'update']);

Route::resource('/laporan', LaporanCampaign::class);

