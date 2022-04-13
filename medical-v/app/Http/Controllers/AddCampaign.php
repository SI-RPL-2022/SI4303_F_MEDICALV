<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class AddCampaign extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('organisasi.addcampaign');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campaign = new Campaign();
        $campaign->nama_campaign = $request->nama_campaign;
        $campaign->org_id = $request->org_id;
        $campaign->org_name = $request->nama_org;
        $campaign->kategori = $request->kategori;
        $campaign->tgl_mulai_campaign = $request->tgl_mulai;
        $campaign->tgl_selesai_campaign = $request->tgl_selesai;
        $campaign->tgl_mulai_pendaftaran = $request->tgl_daftar;
        $campaign->tgl_selesai_pendaftaran = $request->tutup_daftar;
        $campaign->deskripsi = $request->deskripsi;
        $campaign->verif_status = $request->verif_status;
        $campaign->campaign_status = $request->campaign_status;
        $campaign->save();

        return redirect('/addcampaign');
        

        
        

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
