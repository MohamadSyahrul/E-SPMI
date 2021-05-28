@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Deskripsi Pekerjaan
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="{{ route('deskripsi-pekerjaan.create')}}" class="button text-white bg-theme-1 shadow-md mr-2">Add</a>
        
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="table-responsive intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 text-center whitespace-no-wrap">Kode Job Desk</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Kode Jabatan</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Jabatan</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Fungsi</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Penanggung Jawab</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tanggal</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td class="text-center border-b">
                    {{ $item->kode_job }}
                </td>
                <td class="text-center border-b">
                    {{ $item->jabatan_jd->kode_jabatan }}
                </td>
                <td class="text-center border-b">
                    {{ $item->jabatan_jd->nama }}
                </td>
                </td>
                <td class="text-center border-b">
                    {!! $item->deskripsi !!}
                <td class="text-center border-b">
                    {{ $item->penanggung_jawab_jd->nama }}
                </td>
                <td class="text-center border-b">
                    {{date('d F Y',strtotime( $item->tgl_terima))}}
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">

                        <a class="flex items-center mr-3 text-theme-7"
                            href="{{route('deskripsi-pekerjaan.edit',  $item->id)}}"> <i data-feather="check-square"
                                class="w-4 h-4 mr-1"></i> Edit </a>

                        <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview{{ $item->id }}"
                            class="flex items-center mr-3">
                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete</a>

                        <div class="modal" id="delete-modal-preview{{ $item->id }}">
                            <div class="modal__content">
                                <form action="{{route('deskripsi-pekerjaan.destroy', $item->id)}}" method="post"
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
