<?php

namespace App\Http\Controllers;

use App\Models\listvoladmin;
use Illuminate\Http\Request;

class ListVolAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = listvoladmin::all();
        return view('/Admin/indexdaftarvolunteer')->with([
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
     * @param  \App\Models\listvoladmin  $listvoladmin
     * @return \Illuminate\Http\Response
     */
    public function show($id_user)
    {
        $data = listvoladmin::findOrFail($id_user);
        return view('/Admin/editvolunteeradmin')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\listvoladmin  $listvoladmin
     * @return \Illuminate\Http\Response
     */
    public function edit(listvoladmin $listvoladmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\listvoladmin  $listvoladmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {
        $item = listvoladmin::findOrFail($id_user);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/daftarvolunteeradmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\listvoladmin  $listvoladmin
     * @return \Illuminate\Http\Response
     */
    public function delete($id_user)
    {
        $data = listvoladmin::find($id_user);
        $data->delete();

        return redirect('/daftarvolunteeradmin');
    }
}
