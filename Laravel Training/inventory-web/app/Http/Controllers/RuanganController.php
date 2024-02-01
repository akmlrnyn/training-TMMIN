<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ruangan = ruangan::all();
        return view('ruangan.index',compact('ruangan'));
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
        Ruangan::create($input);
        return redirect('/ruangan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Ruangan::find($id);
        return view('ruangan.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Ruangan::find($id);
        return view('ruangan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ruangan = Ruangan::find($id);
        $input = $request->all();
        $ruangan->update($input);
        return redirect('/ruangan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Ruangan::find($id);
        $data->delete();
        return back();
    }
}
