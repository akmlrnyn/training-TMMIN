<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Kategori::create($input);
        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Kategori::find($id);
        return view('kategori.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Kategori::find($id);
        return view('kategori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $input = $request->all();
        $kategori->update($input);
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Kategori::find($id);
        $data->delete();
        return back();
    }
}
