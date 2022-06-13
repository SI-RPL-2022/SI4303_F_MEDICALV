<?php

namespace App\Http\Controllers;

use App\Models\listorgadmin;
use Illuminate\Http\Request;

class ListOrgAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = listorgadmin::all();
        return view('/Admin/indexdaftarorganisasi')->with([
            'data' => $data
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\listorgadmin  $listorgadmin
     * @return \Illuminate\Http\Response
     */
    public function show($id_organisasi)
    {
        $data = listorgadmin::findOrFail($id_organisasi);
        return view('/Admin/editorganisasiadmin')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\listorgadmin  $listorgadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(listorgadmin $listorgadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\listorgadmin  $listorgadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_organisasi)
    {
        $item = listorgadmin::findOrFail($id_organisasi);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/daftarorganisasiadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\listorgadmin  $listorgadmin
     * @return \Illuminate\Http\Response
     */
    public function delete($id_organisasi)
    {
        $data = listorgadmin::find($id_organisasi);
        $data->delete();

        return redirect('/daftarorganisasiadmin')->with('success','Data Berhasil Dihapus');
    }
}
