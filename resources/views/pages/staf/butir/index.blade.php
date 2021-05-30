@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Butir Standar
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview"
                class="button inline-block bg-theme-1 text-white">Add</a>
        </div>
        <div class="modal" id="header-footer-modal-preview">
            <div class="modal__content">
                <form action="{{ route('butir-sop.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">Tambah Butir Standar</h2>
                    </div>
                    <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label>Kode Butir Standar</label>
                            <input type="text" name="kode_butir" 
                                class="input w-full border mt-2 flex-1" placeholder="Kode Butir Otomatis" disabled>
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label>Standar</label>
                            <select name="id_standar" class="input w-full border mt-2 flex-1">
                                <option selected disabled>Pilih...</option>
                                @foreach($standar as $stn)
                                <option value="{{ $stn->id }}">{{$stn->nama}} || {{$stn->kode_standar}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-span-12 sm:col-span-12">
                            <label> Isi Butir SOP  </label>
                                <textarea type="text" name="isi" data-feature="basic" class="summernote w-full border mt-2 flex-1"
                                ></textarea>
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label> Indikator  </label>
                            <input type="text" name="indikator" class="input w-full border mt-2 flex-1" placeholder="Masukan Indikator Butir Standar Operasional">
                        </div>
                        
                        <div class="col-span-12 sm:col-span-12">
                            <label> Tanggal Selesai</label>
                            <div class="relative w-full mt-1">
                                <span class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                                    <i data-feather="calendar" class="w-4 h-4"></i> 
                                </span> 
                                <input type="date" name="tgl_butir" value="{{ old('tgl_butir') }}" placeholder="Tanggal Penetapan Standar" class="input pl-12 w-full border">
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
                <th class="border-b-2 text-center whitespace-no-wrap">Kode Butir</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Nama Butir Standar</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Indikator</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tanggal</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($item as $items)
            <tr>
                <td class="text-center border-b">
                    {{ $items->id_standar }}
                </td>
                <td class="text-center border-b">
                    {{ $items->kode_butir }}
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

                        <a class="flex items-center mr-3 text-theme-7"
                            href="{{route('butir-sop.edit',  $items->id)}}"> <i data-feather="check-square"
                                class="w-4 h-4 mr-1"></i> Edit </a>

                        <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview{{ $items->id }}"
                            class="flex items-center mr-3">
                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete</a>

                        <div class="modal" id="delete-modal-preview{{ $items->id }}">
                            <div class="modal__content">
                                <form action="{{route('butir-sop.destroy', $items->id)}}" method="post"
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
