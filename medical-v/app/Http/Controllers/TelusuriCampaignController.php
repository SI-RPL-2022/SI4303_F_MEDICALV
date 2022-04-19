<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Kategori;
use Laravolt\Indonesia\Models\Province;

class TelusuriCampaignController extends Controller
{
    //
    public function telusuricampaign(){
        $campaign = Campaign::all();
        return view('volunteer/telusuricampaign', compact('campaign'));
    }
}