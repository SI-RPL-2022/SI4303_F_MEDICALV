<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Kategori;
use Laravolt\Indonesia\Models\Province;

class RegistCampaignController extends Controller
{
    //
    public function registcampaign($id){
        return view('volunteer/registcampaign',[
            'campaign'=>Campaign::where('id',$id)->first()
        ]);
    }
}