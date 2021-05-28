<?php

namespace App\Http\Controllers\Waketu;

use App\Unit;
use App\Jabatan;
use App\PenanggungJawab;
use App\Http\Controllers\Controller;
use App\Http\Requests\UnitRequest;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        $pn = PenanggungJawab::all();
        $items = Unit::with(['jabatan_unit','penanggung_jawab'])->get();

        return view('pages.wakilketua.unit.index',compact('jabatan','pn','items'));
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
    public function store(UnitRequest $request)
    {
            $unit = $request->all();
            $unit['kode_unit'] = generateKodeUNT($request->nama);
            Unit::create($unit);

    
            return redirect()->route('unit.index');
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
        $item = Unit::findOrFail($id);
        $jabatan = Jabatan::all();
        $pn = PenanggungJawab::all();
        return view('pages.wakilketua.unit.edit',compact('item','jabatan','pn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnitRequest $request, $id)
    {
        $unt = $request->all();
        $unt['kode_unit'] = generateKodeUNT($request->nama, $id);
        
        $item = Unit::findOrFail($id);
        $item->update($unt);

        return redirect()->route('unit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Unit::findOrFail($id);
        $item->delete();
        return redirect()->route('unit.index');
    }
}
