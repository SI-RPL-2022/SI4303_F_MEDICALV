<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\VolAccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampaignController extends Controller
{
    //
    public function index(){
        return view('organisasi.addcampaign');
    }

    public function stat(){
        // $campaign = Campaign::with('vol_accounts');
        $campaign = Campaign::all()->count();
        $vol_account = VolAccount::all()->count();
        $campaign_selesai = Campaign::where('campaign_status', '=', 'SELESAI')->count();
        $campaign_berjalan = Campaign::where('campaign_status', '=', 'BERJALAN')->count();

        return view ('campaignStat', compact('campaign', 'vol_account', 'campaign_selesai', 'campaign_berjalan'));
    }
}
