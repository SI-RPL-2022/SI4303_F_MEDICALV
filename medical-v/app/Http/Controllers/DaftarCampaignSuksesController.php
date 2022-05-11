<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Kategori;
use Laravolt\Indonesia\Models\Province;

class DaftarCampaignSuksesController extends Controller
{
    //
    public function daftarcampaignsukses(){
        return view('volunteer/daftarcampaignsukses',[
            'campaign' => Campaign::where('id',auth()->user()->campaign_id)->first()
        ]);
    }
    public function storedaftarcampaignsukses($id){
        if(auth()->check()){
            if(auth()->user()->campaign_id == $id){
                return redirect()->back()->with(['status'=>'Anda telah terdaftar Campaign ini']);
            } else if(auth()->user()->campaign_id != null && auth()->user()->campaign_id != $id){
                return redirect()->back()->with(['status' => 'Anda Masih Terdaftar Campaign Lain']);
            }
            User::where('id',auth()->user()->id)->update([
                'campaign_id' => $id
            ]);
            
            return redirect('daftarcampaignsukses')->with('status','Pendaftaran Campaign Berhasil');
        }else{
            return redirect()->back()->with(['status'=>'Silahkan Anda login terlebih dahulu!']);
        }
    }
    public function campaignsaya(){
        if(auth()->check()){
            return view('volunteer/campaignsaya',[
                'campaign' => Campaign::where('id',auth()->user()->campaign_id)->first()
            ]);
        }
        return redirect('home');
    }
    public function deletecampaignsaya(){
        User::where('id',auth()->user()->id)->update([
            'campaign_id' => null
        ]);
        return redirect('campaignsaya')->with('status','Anda telah berhasil berhenti dari campaign');
    }
}