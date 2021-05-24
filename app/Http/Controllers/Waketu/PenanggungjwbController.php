<?php

namespace App\Http\Controllers\Waketu;

use App\Http\Controllers\Controller;
use App\Jabatan;
use App\PenanggungJawab;
use Illuminate\Http\Request;

class PenanggungjwbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        $items = PenanggungJawab::with(['jabatan'])->get();

        return view('pages.wakilketua.penanggung.index',compact('jabatan','items'));
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
        $validation = $request->validate([
        'nik' => 'required | max:25',
        'id_jabatan' => 'required',
        'nama' => 'required | max:50',
        'email' => 'required',
        'no_hp' => 'required | max:12'
    ]);

        $nm = $request->profil;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

        $dtUpload = new PenanggungJawab();
        $dtUpload->nik = $request->nik;
        $dtUpload->id_jabatan = $request->id_jabatan;
        $dtUpload->nama = $request->nama;
        $dtUpload->email = $request->email;
        $dtUpload->no_hp = $request->no_hp;
        $dtUpload->profil = $namaFile;

        $nm->move(public_path().'/img', $namaFile);
        $dtUpload->save();

        return redirect()->route('penanggung-jawab.index');
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
        $item = PenanggungJawab::findOrFail($id);
        $jabatan = Jabatan::all();
        return view('pages.wakilketua.penanggung.edit',compact('item','jabatan'));
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
        $validation = $request->validate([
            'nik' => 'required | max:25',
            'id_jabatan' => 'required',
            'nama' => 'required | max:50',
            'email' => 'required',
            'no_hp' => 'required | max:12'
        ]);

        $ubah = PenanggungJawab::findorfail($id);
        $awal = $ubah->profil;

        $dt =[
            'nik' =>$request['nik'],
            'id_jabatan' =>$request['id_jabatan'],
            'nama' =>$request['nama'],
            'email' =>$request['email'],
            'no_hp' =>$request['no_hp'],
            'profil' => $awal,
        ];
        $request->profil->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect()->route('penanggung-jawab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = PenanggungJawab::findorfail($id);

        $file = public_path('/img/').$hapus->profil;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka hapus file diforder public/img
            @unlink($file);
        }
        //hapus data didatabase
        $hapus->delete();
        return back();
    }
}
