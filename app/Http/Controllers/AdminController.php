<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\makanan;
use App\pengguna;
use App\test;

class AdminController extends Controller
{
    public function get()
    {
        $penggunas = pengguna::all();
        return view('admin.cuser', ['penggunas'=>$penggunas]);
    }
    public function destroy($id)
    {
        $penggunas = pengguna::destroy($id);
        return redirect(Route('get'));
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $req)
    {
        $user = new pengguna;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->id_level = $req->level;
        $user->save();
        return redirect(Route('get'));
    }
    public function edit($id)
    {
        $penggunas = pengguna::find($id);
        return view('admin.update', ['penggunas'=>$penggunas]);
    }
    public function update(Request $req, $id)
    {
        $penggunas = pengguna::find($id);
        $penggunas->username = $req->username;
        $penggunas->password = $req->password;
        $penggunas->name = $req->name;
        $penggunas->id_level = $req->level;
        $penggunas->save();
        return redirect(Route('get'));
    }
}
