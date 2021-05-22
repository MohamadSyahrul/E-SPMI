<?php

namespace App\Http\Controllers;

use App\StandarNasional;
use App\Http\Requests\StandarnasionalRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class StandarnasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sn = StandarNasional::all();
        return view('pages.standar.standar_nasional.index',compact('sn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.standar.standar_nasional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StandarnasionalRequest $request)
    {
        $sn = $request->all();
        $sn['kode_sn'] = generateKodeSN($request->nama_sn, $request->tanggal_sn);
        $sn['tanggal_sn'] = dateFormat($request->tanggal_sn);
        
        StandarNasional::create($sn);
        return redirect()->route('standar-nasional.index');
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
        $item = StandarNasional::findOrFail($id);

        return view('pages.standar.standar_nasional.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StandarnasionalRequest $request, $id)
    {
        $sn = $request->all();
        $sn['kode_sn'] = generateKodeSN($request->nama_sn, $request->tanggal_sn);
        $sn['tanggal_sn'] = dateFormat($request->tanggal_sn);
        
        $item = StandarNasional::findOrFail($id);
        $item->update($sn);

        return redirect()->route('standar-nasional.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = StandarNasional::findOrFail($id);
        $item->delete();
        return redirect()->route('standar-nasional.index');
    }
}
