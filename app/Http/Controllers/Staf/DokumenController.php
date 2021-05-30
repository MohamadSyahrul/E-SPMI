<?php

namespace App\Http\Controllers\Staf;

use App\Dokumenpendukung;
use App\Standar;
use App\Http\Controllers\Controller;
use App\Http\Requests\DokumenRequest;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $standar = Standar::all();
        $items = Dokumenpendukung::with(['standar'])->get();

        return view('pages.staf.dokumen.index',compact('standar','items'));
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
    public function store(DokumenRequest $request)
    {
        $dox = new Dokumenpendukung();
        $dox->id_standar = $request->id_standar;
        $dox->nama = $request->nama;
        $dox['tgl_upload'] = dateFormat($request->tgl_upload);
        if ($request->hasFile('dokumen')) {
            $nm = $request->dokumen;
            $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
            $dox->dokumen = 'DOC' . '.' . $namaFile;
            $nm->move(public_path() . '/doc', $namaFile);
        }else{
            $dox->dokumen = 'default.pdf';
        }
        $dox->save();

        return redirect()->route('dokumen-pendukung.index');
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
        $item = Dokumenpendukung::findOrFail($id);
        $standar = Standar::all();
        return view('pages.staf.dokumen.edit',compact('item','standar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DokumenRequest $request, $id)
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
        $hapus = Dokumenpendukung::findorfail($id);

        $file = public_path('/doc').$hapus->dokumen;
        //cek jika ada dokumen
        if (file_exists($file)){
            @unlink($file);
        }
        //hapus data didatabase
        $hapus->delete();
        return back();
    }
}
