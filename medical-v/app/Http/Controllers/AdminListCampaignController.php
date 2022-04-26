<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class AdminListCampaignController extends Controller
{
    public function adminlistcampaign($id)
    {
        // return view("admin/adminlistcampaign");
        return view("admin/adminlistcampaign", [
            "campaign"=>Campaign::where("id",$id)->get()
        ]);
    }


}