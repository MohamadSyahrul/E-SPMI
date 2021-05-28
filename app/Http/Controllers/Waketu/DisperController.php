<?php

namespace App\Http\Controllers\Waketu;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisperRequest;
use App\Jabatan;
use App\JobDesk;
use App\PenanggungJawab;
use Illuminate\Http\Request;

class DisperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = JobDesk::with(['jabatan_jd','penanggung_jawab_jd'])->get();

        return view('pages.wakilketua.jobdesk.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        $pn = PenanggungJawab::all();
        return view('pages.wakilketua.jobdesk.create',compact('jabatan','pn'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DisperRequest $request)
    {           
            $jobdesk = $request->all();
            $jobdesk['kode_job'] = generateKodeJD($request->deskripsi,$request->tgl_terima);
            $jobdesk['tgl_terima'] = dateFormat($request->tgl_terima);

            JobDesk::create($jobdesk);
            return redirect()->route('deskripsi-pekerjaan.index');
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
        $item = JobDesk::findOrFail($id);

        $jabatan = Jabatan::all();
        $pn = PenanggungJawab::all();
        return view('pages.wakilketua.jobdesk.edit',compact('jabatan','pn','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DisperRequest $request, $id)
    {
            $jd = $request->all();
            $jd['kode_job'] = generateKodeJD($request->deskripsi,$request->tgl_terima);
            $jd['tgl_terima'] = dateFormat($request->tgl_terima);
            $item = JobDesk::findOrFail($id);
            $item->update($jd);

            return redirect()->route('deskripsi-pekerjaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = JobDesk::findOrFail($id);
        $item->delete();
        return redirect()->route('deskripsi-pekerjaan.index');
    }
}
