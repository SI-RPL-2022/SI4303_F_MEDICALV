<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Kategori;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;

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
        $kat = Kategori::pluck('kategori');
        $provinces = Province::pluck('name', 'id');
        return view('organisasi.addcampaign', [
            'provinces' => $provinces,
            'kat' => $kat
        ]);
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
        // set file foto dengan nama baru
        $poster = time().'.'.$request->poster->extension();

        //path penyimpanan gambar
        $request->poster->move(public_path('/img/poster'), $poster);
        
        $campaign = new Campaign();
        $campaign->nama_campaign = $request->nama_campaign;
        $campaign->org_id = $request->org_id;
        $campaign->org_name = $request->nama_org;
        $campaign->provinsi = $request->provinsi;
        $campaign->kabupaten = $request->kabupaten;
        $campaign->kecamatan = $request->kecamatan;
        $campaign->kategori = $request->kategori;
        $campaign->tgl_mulai_campaign = $request->tgl_mulai;
        $campaign->tgl_selesai_campaign = $request->tgl_selesai;
        $campaign->tgl_mulai_pendaftaran = $request->tgl_daftar;
        $campaign->tgl_selesai_pendaftaran = $request->tutup_daftar;
        $campaign->deskripsi = $request->deskripsi;
        $campaign->verif_status = $request->verif_status;
        $campaign->campaign_status = $request->campaign_status;
        $campaign->poster = $poster; 
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
