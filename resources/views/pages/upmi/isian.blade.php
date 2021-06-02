@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Tabel Isian UPMI
    </h2>
</div>
<!-- BEGIN: Datatable -->
<div class="table-responsive intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 text-center whitespace-no-wrap">Kode Standar</th> 
                <th class="border-b-2 text-center whitespace-no-wrap">Nama Standar</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Butir Standar</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Indikator</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tanggal</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($item as $items)
            <tr>
                <td class="text-center border-b">
                    {{ $items->standar_btr->kode_standar }}
                </td>
                <td class="text-center border-b">
                    {{ $items->standar_btr->nama }}
                </td>
                <td class="text-center border-b">
                    {!! $items->isi !!}
                </td>
                <td class="text-center border-b">
                    {{ $items->indikator }}
                </td>
                <td class="text-center border-b">
                    {{date('d F Y',strtotime( $items->tgl_butir))}}
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">

                        <a href="javascript:;" data-toggle="modal" data-target="#tambah{{ $items->id }}"
                            class="flex items-center mr-3 text-green-700">
                            <i data-feather="file-plus" class="w-4 h-4 mr-1"></i>Tambah</a>

                        <div class="modal" id="tambah{{ $items->id }}">
                            <div class="modal__content">
                                <form action="{{ route('isian-upmi.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                                        <h2 class="font-medium text-base mr-auto">Tambah Data Deskriptor</h2>
                                    </div>
                                    <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label>Kode Standar</label>
                                            <input type="text" name="id_standar" 
                                            class="input w-full border mt-2 flex-1" value="{{ $items->standar_btr->id }}" readonly>
                                        </div>
                                        <div class="col-span-12 sm:col-span-12">
                                            <label> Kode Butir Standar Operasional </label>
                                            <input type="text" name="id_butir" 
                                            class="input w-full border mt-2 flex-1" value="{{ $items->id }}" readonly>
                                        </div>
                                        
                                        <div class="col-span-12 sm:col-span-12">
                                            <label>Isi Deskriptor</label>
                                                <textarea type="text" name="deskripsi" data-feature="basic" class="summernote w-full border mt-2 flex-1"
                                                ></textarea>
                                        </div>
                                        <div class="col-span-12 sm:col-span-12">
                                            <label>Pengendali Dokumen</label>
                                                <textarea type="text" name="pengendali_dokumen" data-feature="basic" class="summernote w-full border mt-2 flex-1"
                                                ></textarea>
                                        </div>
                                        
                                      
                                    </div>
                                    <div class="px-5 py-3 text-right border-t border-gray-200">
                                        <button type="reset" class="button w-20 border text-gray-700 mr-1">Cancel</button>
                                        <button type="submit" class="button w-20 bg-theme-1 text-white">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview{{ $items->id }}"
                            class="flex items-center mr-3 text-blue-700">
                            <i data-feather="book" class="w-4 h-4 mr-1"></i>Dokumen</a>

                        <div class="modal" id="delete-modal-preview{{ $items->id }}">
                            <div class="modal__content">
                                <div class="p-5 text-center"> <i data-feather="book" class="w-16 h-16 text-blue-900 mx-auto mt-3"></i>
                                    <div class="text-purple-900 mt-5">
                                    Nama Pendukung : 
                                    <span class="text-gray-700">  {{$items->standar_btr->nama}} </span>
                                    </div>
                                    <div class="text-purple-900 mt-5">
                                        Download : 
                                        <span class="text-blue-700 font-bold"> 
                                            <a href="" download="{{ asset('doc/'.$items->standar_btr->dokumen->dokumen)}}" target="_blank" rel="noopener noreferrer">
                                                <u>
                                                    {{$items->standar_btr->dokumen->dokumen}}
                                                </u>
                                            </a>
                                         </span>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
