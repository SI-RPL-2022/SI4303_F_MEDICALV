<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login_model;
use Illuminate\Support\Facades\DB;

class Auth extends Controller
{
	public function register()
	{
		return view('register', ['title' => 'Registrasi']);
	}

	public function login()
	{
		return view('login', ['title' => 'Login']);
	}

	public function prosesRegister(Request $request){
		$validateData = $request->validate([
			'nama_organisasi' => 'required',
			'alamat_organisasi' => 'required',
			'password' => 'required|min:6',
			'password_confirmation' => 'same:password',
			'logo_organisasi' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
			'email_organisasi' => 'required',
		],
		[
			'nama_organisasi.required' => 'Nama Organisasi tidak boleh kosong!',
			'alamat_organisasi.required' => 'Alamat Organisasi tidak boleh kosong!',
			'password.required' => 'Password tidak boleh kosong!',
			'password.min' => 'Password harus lebih dari 6 huruf!',
			'password_confirmation.same' => 'Password harus sama!',
			'logo_organisasi.required' => 'Logo Organisasi tidak boleh kosong!',
			'email_organisasi.required' => 'Email tidak boleh kosong!'
		]);

		//upload logo_organisasi
		$file= $request->file('logo_organisasi');
		$fileNameToStore = $request->file('logo_organisasi')->getClientOriginalName();

		$file->move(public_path('img'), $fileNameToStore);

		// Login_model::create($validateData);
		DB::table('org_accounts')->insert([
			'nama_organisasi' => $request->nama_organisasi,
			'alamat_organisasi' => $request->alamat_organisasi,
			'password' => md5($request->password),
			'logo_organisasi' => $fileNameToStore,
			'email_organisasi' => $request->email_organisasi
		]);

		return redirect('/login')->with('success', 'Registrasi berhasil. Silahkan login!');
	}

	public function prosesLogin(Request $request)
	{
		$request->validate([
			'email_organisasi' => 'required',
			'password' => 'required'
		],
		[
			'email_organisasi.required' => 'Email tidak boleh kosong!',
			'password.required' => 'Password tidak boleh kosong!'
		]);

		$cekUser = Login_model::where('email_organisasi', $request->email_organisasi)->first();

		if($cekUser){
			if(md5($request->password) == $cekUser->password){
				session(['id_organisasi' => $request->id_organisasi]);
				session(['nama_organisasi' => $request->nama_organisasi]);
				session(['email_organisasi' => $request->email_organisasi]);
				return redirect('dashboard');
			}else {
				return back()->withInput()->with('error',"Password salah! Silahkan masukkan password dengan benar.");
			}
		}else{
			return back()->withInput()->with('error',"Akun tidak dapat ditemukan! Silahkan login kembali.");
		}
	}

	public function logout()
	{
	// Hapus session 'email'
		session()->forget('id_organisasi');
		session()->forget('nama_organisasi');
		session()->forget('email_organisasi');
		// return redirect('login')->with('pesan','Logout success');
		return redirect('/');
	}
}
