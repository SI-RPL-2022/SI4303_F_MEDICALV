<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Campaign;

class CampaignSayaController extends Controller
{
    //
    public function campaignsaya(){
        return view('volunteer/campaignsaya',[
            'campaign' => Campaign::where('id',auth()->user()->campaign_id)->first()
        ]);
    }
}
