<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('user.index',compact('user'));
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

        // khusus pa ridwan
        if($request->input('password'))
        {
            $input['password'] = bcrypt($input['password']);
        }

        User::create($input);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('user.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('user.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();

        if($request->input('password'))
        {
            //jika passwordnya diubah, maka akan mengambil dari form
            // bcrypt digunakan untuk membuat enkripsi di password.
            $password = $input['password'];
            $input['password'] = $password;
        }
        else
        {
            $input = Arr::except($input,['password']);
        }
        $user->update($input);
        return redirect('/user');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return back();
    }
}
