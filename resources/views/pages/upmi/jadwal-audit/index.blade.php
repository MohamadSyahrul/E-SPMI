@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Jadwal Audit
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview"
                class="button inline-block bg-theme-1 text-white">Add</a>
        </div>
        <div class="modal" id="header-footer-modal-preview">
            <div class="modal__content">
                <form action="{{ route('jadwal-audit.store')}}" method="POST">
                    @csrf
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">Tambah Jadwal Audit</h2>
                    </div>
                    <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label>Kode Jadwal Audit</label>
                            <input type="text" name="kode_jadwal" 
                                class="input w-full border mt-2 flex-1" placeholder="Kode Otomatis" disabled>
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
                            <label>Auditor</label>
                            <select name="id_auditor" class="input w-full border mt-2 flex-1">
                                <option selected disabled>Pilih...</option>
                                @foreach($audit as $auditor)
                                <option value="{{ $auditor->id }}">{{$auditor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label> Program Studi </label>
                            <input type="text" name="prodi" class="input w-full border mt-2 flex-1"
                                placeholder="Masukan Program Studi">
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label>Tahun Pengukuran Mutu </label>
                            <input type="text" name="tahun" class="input w-full border mt-2 flex-1"
                                placeholder="Masukan Tahun Pengukuran Mutu">
                            <h6 style="color: #1900ff;">contoh: 2021/2022<span style="color: #ea5455;">*</span></h6>
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label> Tanggal Mulai</label>
                            <div class="relative w-full mt-1">
                                <span class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                                    <i data-feather="calendar" class="w-4 h-4"></i> 
                                </span> 
                                <input type="date" name="tgl_mulai" value="{{ old('tgl_mulai') }}" class="input pl-12 w-full border">
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label> Tanggal Selesai</label>
                            <div class="relative w-full mt-1">
                                <span class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                                    <i data-feather="calendar" class="w-4 h-4"></i> 
                                </span> 
                                <input type="date" name="tgl_selesai" value="{{ old('tgl_selesai') }}" class="input pl-12 w-full border">
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
                <th class="border-b-2 text-center whitespace-no-wrap">Kode Jadwal</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Kode Standar</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Auditor</th>
                <th class="border-b-2 text-center whitespace-no-wrap">program Studi</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tahun</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tanggal Mulai</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tanggal Selesai</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($item as $items)
            <tr>
                <td class="text-center border-b">
                    {{ $items->kode_jadwal }}
                </td>
                <td class="text-center border-b">
                    {{ $items->standar->kode_standar }}
                </td>
                <td class="text-center border-b">
                    {{ $items->auditor->name }}
                </td>
                <td class="text-center border-b">
                    {{ $items->prodi }}
                </td>
                <td class="text-center border-b">
                    {{ $items->tahun }}
                </td>
                <td class="text-center border-b">
                    {{date('d F Y',strtotime( $items->tgl_mulai))}}
                </td>
                <td class="text-center border-b">
                    {{date('d F Y',strtotime( $items->tgl_selesai))}}
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">

                        <a class="flex items-center mr-3 text-theme-7"
                            href="{{route('jadwal-audit.edit',  $items->id)}}"> <i data-feather="check-square"
                                class="w-4 h-4 mr-1"></i> Edit </a>

                        <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview{{ $items->id }}"
                            class="flex items-center mr-3">
                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete</a>

                        <div class="modal" id="delete-modal-preview{{ $items->id }}">
                            <div class="modal__content">
                                <form action="{{route('jadwal-audit.destroy', $items->id)}}" method="post"
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
