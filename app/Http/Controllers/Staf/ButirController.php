<?php

namespace App\Http\Controllers\Staf;

use App\Butirstandar;
use App\Http\Controllers\Controller;
use App\Http\Requests\ButirRequest;
use App\Standar;
use Illuminate\Http\Request;

class ButirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $standar = Standar::all();
       $item = Butirstandar::all();
       return view('pages.staf.butir.index', compact('item','standar'));
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
    public function store(ButirRequest $request)
    {
        $btr = $request->all();
        $btr['kode_butir'] = generateKodeBTR($request->tgl_butir);
        $btr['tgl_butir'] = dateFormat($request->tgl_butir);
        
        Butirstandar::create($btr);
        return redirect()->route('butir-sop.index');
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
        $standar = Standar::all();
        $item = Butirstandar::findOrFail($id);
        return view('pages.staf.butir.edit', compact('standar','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ButirRequest $request, $id)
    {
        $btr = $request->all();
        $btr['kode_butir'] = generateKodeBTR($request->tgl_butir);
        $btr['tgl_butir'] = dateFormat($request->tgl_butir);
        $item = Butirstandar::findOrFail($id);
        $item->update($btr);
        return redirect()->route('butir-sop.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Butirstandar::findOrFail($id);
        $item->delete();
        return redirect()->route('butir-sop.index');
    }
}
