@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Dokumen Pendukung
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        {{-- <button class="button text-white bg-theme-1 shadow-md mr-2">Add</button> --}}
        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview"
                class="button inline-block bg-pink-600 text-white">Add</a> 
        </div>
        <div class="modal" id="header-footer-modal-preview">
            <div class="modal__content">
                <form action="{{ route('dokumen-pendukung.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">Tambah Dokumen Pendukung</h2>
                    </div>
                    <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">

                        <div class="col-span-12 sm:col-span-12"> 
                            <label>Standar Operasional</label> 
                                <select name="id_standar" class="input w-full border mt-2 flex-1">
                                <option selected disabled>Pilih...</option>
                                @foreach($standar as $snr)
                                    <option value="{{ $snr->id }}">{{$snr->nama}}</option>
                                @endforeach
                                </select> 
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label>Nama Dokumen</label>
                            <input type="text" name="nama" class="input w-full border mt-2 flex-1" placeholder="Masukan Nama" required>
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label>Dokumen</label>
                            <input type="file"  name="dokumen" class="input w-full border mt-2 flex-1" placeholder="Upload File" required>
                            <span width="1%" style="color: blue;">format file: docx,doc,pdf</span>
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label> Tanggal Upload</label>
                            <div class="relative w-full mt-1">
                                <span class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                                    <i data-feather="calendar" class="w-4 h-4"></i> 
                                </span> 
                                <input type="date" name="tgl_upload" value="{{ old('tgl_upload') }}" placeholder="Tanggal Upload" class="input pl-12 w-full border">
                            </div>
                        </div>
                    </div>
                    <div class="px-5 py-3 text-right border-t border-gray-200"> 
                        <button type="reset" class="button w-20 border text-gray-700 mr-1">Cancel</button>
                        <button type="submit" class="button w-20 bg-theme-1 text-white">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="table-responsive intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 text-center whitespace-no-wrap">Nama Standar</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Nama Dokumen</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Dokumen</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tanggal</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td class="text-center border-b">
                    {{ $item->standar->nama }}
                </td>
                <td class="text-center border-b">
                    {{ $item->nama }}
                </td>
                <td class="text-center border-b">
                    {{ $item->dokumen }}
                </td>
                <td class="text-center border-b">
                    {{date('d F Y',strtotime( $item->tgl_upload))}}
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">

                        <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview{{ $item->id }}"
                            class="flex items-center text-red-800 font-bold mr-3">
                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete</a>

                        <div class="modal" id="delete-modal-preview{{ $item->id }}">
                            <div class="modal__content">
                                <form action="{{route('dokumen-pendukung.destroy', $item->id)}}" method="post"
                                    enctype="multipart/form-data">
                                    @method('delete')
                                    @csrf
                                    <div class="p-5 text-center"> <i data-feather="x-circle"
                                            class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Apakah Kamu Yakin?</div>
                                        <div class="text-gray-600 mt-2">Apakah Anda benar-benar ingin menghapus data
                                            ini? Proses ini tidak dapat dibatalkan.</div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="button" data-dismiss="modal"
                                            class="button w-24 border text-gray-700 mr-1">Cancel</button>

                                        <button type="submit" class="button w-24 bg-theme-6 text-white">Delete</button>
                                    </div>
                                </form>
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
