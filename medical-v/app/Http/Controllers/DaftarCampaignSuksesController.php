<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Kategori;
use Laravolt\Indonesia\Models\Province;

class DaftarCampaignSuksesController extends Controller
{
    //
    public function daftarcampaignsukses(){
        return view('volunteer/daftarcampaignsukses');
    }
}