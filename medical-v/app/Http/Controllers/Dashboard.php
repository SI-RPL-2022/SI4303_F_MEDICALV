<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\F2s_model;

class Dashboard extends Controller
{
    public function index(){

    	return view('dashboard', ['title' => 'Dashboard']);
    }
}
