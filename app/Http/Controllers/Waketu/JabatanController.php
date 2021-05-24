<?php

namespace App\Http\Controllers\Waketu;

use App\Http\Controllers\Controller;
use App\Http\Requests\JabatanRequest;
use App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Jabatan::all();
        return view('pages.wakilketua.jabatan.index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.wakilketua.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JabatanRequest $request)
    {
        $jbt = $request->all();
        $jbt['kode_jabatan'] = generateKodeJBT($request->nama);
        
        Jabatan::create($jbt);
        return redirect()->route('jabatan.index');
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
        $item = Jabatan::findOrFail($id);

        return view('pages.wakilketua.jabatan.edit',[
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
    public function update(JabatanRequest $request, $id)
    {
        $jbt = $request->all();
        $jbt['kode_jabatan'] = generateKodeJBT($request->nama);
        
        $item = Jabatan::findOrFail($id);
        $item->update($jbt);

        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Jabatan::findOrFail($id);
        $item->delete();
        return redirect()->route('jabatan.index');
    }
}
