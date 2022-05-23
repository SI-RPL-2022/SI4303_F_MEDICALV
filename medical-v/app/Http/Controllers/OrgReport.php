<?php

namespace App\Http\Controllers;
use App\Models\CampaignReport;

use Illuminate\Http\Request;

class OrgReport extends Controller
{
    //
    public function index()
    {
        //
        $report = CampaignReport::all();
        return view('organisasi.orgreport',compact('report'));
    }
}
