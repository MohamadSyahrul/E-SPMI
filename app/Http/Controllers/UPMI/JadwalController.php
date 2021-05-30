<?php

namespace App\Http\Controllers\UPMI;

use App\Http\Controllers\Controller;
use App\Http\Requests\JadwalRequest;
use App\Jadwal;
use App\Standar;
use App\User;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $standar = Standar::all();
        $audit = User::where('level', 'auditor')->get();
        $item = Jadwal::with(['standar','auditor'])->get();
        return view('pages.upmi.jadwal-audit.index', compact('standar','audit','item'));
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
    public function store(JadwalRequest $request)
    {
        $jadwal = $request->all();
        $jadwal['kode_jadwal'] = generateKodeJDWL($request->tgl_mulai,$request->tgl_selesai);
        $jadwal['tgl_mulai'] = dateFormat($request->tgl_mulai);
        $jadwal['tgl_selesai'] = dateFormat($request->tgl_selesai);


        Jadwal::create($jadwal);
        return redirect()->route('jadwal-audit.index');
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
        $auditor = User::where('level', 'auditor')->get();
        $item = Jadwal::findOrFail($id);
        return view('pages.upmi.jadwal-audit.edit', compact('standar','auditor','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JadwalRequest $request, $id)
    {
        $jadwal = $request->all();
        $jadwal['kode_jadwal'] = generateKodeJDWL($request->tgl_mulai,$request->tgl_selesai);
        $jadwal['tgl_mulai'] = dateFormat($request->tgl_mulai);
        $jadwal['tgl_selesai'] = dateFormat($request->tgl_selesai);
        $item = Jadwal::findOrFail($id);
        $item->update($jadwal);
        return redirect()->route('jadwal-audit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Jadwal::findOrFail($id);
        $item->delete();
        return redirect()->route('jadwal-audit.index');
    }
}
