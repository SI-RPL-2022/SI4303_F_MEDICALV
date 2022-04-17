<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailCampaignController extends Controller
{
    //
    public function detailcampaign(){
        return view('volunteer/detailcampaign');
    }
}