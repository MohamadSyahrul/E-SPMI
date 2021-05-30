<?php

namespace App\Http\Controllers;

use App\Http\Requests\StandarRequest;
use App\PenanggungJawab;
use App\Standar;
use App\StandarNasional;
use App\Unit;
use Illuminate\Http\Request;

class StandarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = Unit::all();
        $pj = PenanggungJawab::all();
        $standar_nasional = StandarNasional::all();

        $items = Standar::with(['unit_standar', 'penanggung_jawab_standar','standar_nasional_s'])->get();
        return view('pages.standar.standar.index',compact('unit','pj','standar_nasional','items'));
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
    public function store(StandarRequest $request)
    {
        $standar = $request->all();
        $standar['kode_standar'] = generateKodeS($request->tgl_standar);
        $standar['tgl_standar'] = dateFormat($request->tgl_standar);

        
        Standar::create($standar);
        return redirect()->route('standar.index');
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
        $item = Standar::findOrFail($id);

        $unit = Unit::all();
        $pj = PenanggungJawab::all();
        $standar_nasional = StandarNasional::all();
        return view('pages.standar.standar.edit',compact('unit','pj','standar_nasional','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StandarRequest $request, $id)
    {
            $standar = $request->all();
            $standar['kode_standar'] = generateKodeS($request->tgl_standar);
            $standar['tgl_standar'] = dateFormat($request->tgl_standar);
            $item = Standar::findOrFail($id);
            $item->update($standar);

            return redirect()->route('standar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Standar::findOrFail($id);
        $item->delete();
        return redirect()->route('standar.index');
    }
}
