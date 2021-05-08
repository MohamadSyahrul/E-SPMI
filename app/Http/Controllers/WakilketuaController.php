<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WakilketuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waketum = User::where('level', 'wakil_ketua')->get();
        return view('pages.managemen_akun.wakil_ketua.index',[
            'waketum'=>$waketum
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
        $item = User::findOrFail($id);
        return view('pages.managemen_akun.wakil_ketua.edit',compact('item'));
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
        $update = User::findorfail($id);

        $update->name = $request->name;
        $update->nip = $request->nip;
        $update->alamat = $request->alamat;
        $update->jabatan = $request->jabatan;
        $update->no_hp = $request->no_hp;
        $update->email = $request->email;
        $update->password = Hash::make($request->get('password'));
        if ($request->hasFile('profil')) {
            $nm = $request->profil;
            $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
            $update->profil = $namaFile;
            $nm->move(public_path() . '/img', $namaFile);
        }else{
            $update->profil = 'default.png';
        }
        $update->update();
        return redirect()->route('akun-wakil-ketua.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::findOrFail($id);

        $file = public_path('/img').$delete->profil;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka delete file diforder public/img
            @unlink($file);
        }
        //delete data didatabase
        $delete->delete();
        return back();
    }
}
