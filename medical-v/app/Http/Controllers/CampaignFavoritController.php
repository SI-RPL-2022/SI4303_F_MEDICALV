<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampaignFavorit;

class CampaignFavoritController extends Controller
{
    public function getcampaignfavorit(){
        return view('volunteer/campaignfavorit');
    }
    public function campaignfavorit(Request $request){
        CampaignFavorit::create([
            'user_id'=> auth()->user()->id,
            'campaign_id'=> $request->campaign_id
        ]);
        return redirect('/telusuricampaign')->with('status', 'Campaign berhasil dijadikan favorit!');
    }
    public function deletecampaignfavorit(Request $request){
        CampaignFavorit::where('campaign_id',$request->campaign_id)->delete();
        return redirect('/campaignfavorit')->with('status', 'Campaign berhasil dihapus dari favorit!');
    }
}
