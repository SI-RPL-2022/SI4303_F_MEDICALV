<?php

namespace App\Http\Controllers;


use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{

    public function index()
    {
    $categories = Kategori::all();
        return view('kategori.index', compact('categories'));
    }

    public function read()
    {
        $data = Kategori::all();
        return view('kategori.read', compact('data'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $data['kategori'] = $request->kategori;
        Kategori::insert($data);
    }

    public function show($kode_kategori)
    {
        $data = Kategori::findOrFail($kode_kategori);
        return view('kategori.edit', compact('data'));
    }

    public function update(Request $request, $kode_kategori)
    {
        $data = Kategori::findOrFail($kode_kategori);
        $data->kategori = $request->kategori;
        $data->save();
    }

    public function hapus($kode_kategori)
    {
        $data = Kategori::findOrFail($kode_kategori);
        return view('kategori.hapus', compact('data'));
    }

    public function destroy($kode_kategori)
    {
        $data = Kategori::findOrFail($kode_kategori);
        $data->delete();
    }
}