@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Unit
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview"
                class="button inline-block bg-theme-1 text-white">
                <i data-feather="plus"></i>
            </a>
        </div>
        <div class="modal" id="header-footer-modal-preview">
            <div class="modal__content">
                <form action="{{ route('unit.store') }}" method="POST">
                    @csrf
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">Tambah Data Unit</h2>
                    </div>

                    <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label>Kode Unit</label>
                            <input type="text" name="kode_unit" class="input w-full border mt-2 flex-1"
                                placeholder="Kode Auto Generate" disabled>
                        </div>

                        <div class="col-span-12 sm:col-span-12">
                            <label>Nama Unit</label>
                            <input type="text" name="nama" class="input w-full border mt-2 flex-1"
                                placeholder="Masukan Nama Unit" required>
                        </div>

                        <div class="col-span-12 sm:col-span-12">
                            <label>Jabatan</label>
                            <select name="id_jabatan" class="input w-full border mt-2 flex-1" required>
                                <option selected disabled>Pilih...</option>
                                @foreach($jabatan as $jbt)
                                <option value="{{ $jbt->id }}">{{$jbt->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-12 sm:col-span-12">
                            <label>Penanggung Jawab</label>
                            <select name="id_penanggung_jawab" class="input w-full border mt-2 flex-1" required>
                                <option selected disabled>Pilih...</option>
                                @foreach($pn as $pnj)
                                <option value="{{ $pnj->id }}">{{$pnj->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="px-5 py-3 text-right border-t border-gray-200">
                        <button type="reset" class="button w-20 bg-blue-600 text-white">Reset</button>
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
                <th class="border-b-2 text-center whitespace-no-wrap">Kode Unit</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Nama Unit Kerja</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Pengampu Unit Kerja</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Penanggung Jawab</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td class="text-center border-b">
                    {{ $item->kode_unit }}
                </td>
                <td class="text-center border-b">
                    {{ $item->nama }}
                </td>
                </td>
                <td class="text-center border-b">
                    {{ $item->jabatan_unit->nama }}
                <td class="text-center border-b">
                    {{ $item->penanggung_jawab->nama }}
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">

                        <a class="flex items-center mr-3 text-theme-7"
                            href="{{route('unit.edit',  $item->id)}}"> <i data-feather="check-square"
                                class="w-4 h-4 mr-1"></i> Edit </a>

                        <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview{{ $item->id }}"
                            class="flex items-center mr-3">
                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete</a>

                        <div class="modal" id="delete-modal-preview{{ $item->id }}">
                            <div class="modal__content">
                                <form action="{{route('unit.destroy', $item->id)}}" method="post"
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
