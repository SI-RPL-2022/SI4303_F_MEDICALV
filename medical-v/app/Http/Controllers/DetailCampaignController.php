<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Kategori;
use Laravolt\Indonesia\Models\Province;

class DetailCampaignController extends Controller
{
    //
    public function detailcampaign($id){
        return view('volunteer/detailcampaign',[
            'campaign'=>Campaign::where('id',$id)->get()
        ]);
    }
}