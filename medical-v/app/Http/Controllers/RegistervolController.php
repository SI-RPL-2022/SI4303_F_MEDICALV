<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistervolController extends Controller
{
    //
    public function registervol(){
        return view('auth/registervol');
    }
    public function registvol(Request $request){

        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users',
            'phone_number' => 'required|unique:users',
            'address' => 'required',
            'birth' => 'required',
            'sex' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->birth = $request->birth;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->sex = $request->sex;
        $user->save();
        // User::create([
        //     'name' => $request->name,
        //     'password' => bcrypt($request->password),
        //     'birth' => $request->birth,
        //     'email' => $request->email,
        //     'phone_number' => $request->phone_number,
        //     'address' => $request->address,
        //     'sex' => $request->sex,
        // ]);
        return redirect('/loginvol')->with('status', 'Registrasi Berhasil!');
    }
}
