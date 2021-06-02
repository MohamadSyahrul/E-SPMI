@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Table Instrumen Audit 
    </h2>
</div>
<!-- BEGIN: Datatable -->
<div class="table-responsive intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 text-center whitespace-no-wrap">Program Studi</th> 
                <th class="border-b-2 text-center whitespace-no-wrap">Tahun</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Kode</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Auditor</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Elemen</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Deskriptor</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Indikator</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Dokumen</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tanggal Audit</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($item as $items)
            <tr>
                <td class="text-center border-b">
                    {{ $items->standar->jadwal->prodi }}
                </td>
                <td class="text-center border-b">
                    {{ $items->standar->jadwal->tahun }}
                </td>
                <td class="text-center border-b">
                    {{ $items->standar->standar_nasional_s->kode_sn }} || {{ $items->deskriptor->standar->kode_standar }}
                </td>
                <td class="text-center border-b">
                    {{ $items->standar->jadwal->auditor->name }}
                </td>
                <td class="text-center border-b">
                    {!! $items->butir->isi !!}
                </td>                
                <td class="text-center border-b">
                    {!! $items->deskripsi !!}
                </td>
                <td class="text-center border-b">
                    {!! $items->butir->indikator !!}
                </td>
                <td class="text-center border-b">
                    {!! $items->pengendali_dokumen !!}
                </td>
                <td class="text-center border-b">
                    {{date('d F Y',strtotime( $items->standar->jadwal->tgl_mulai))}} ||
                    {{date('d F Y',strtotime( $items->standar->jadwal->tgl_selesai))}}  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
