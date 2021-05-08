@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Wakil Ketua
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <button class="button text-white bg-theme-1 shadow-md mr-2">Add wakil ketua</button>
       
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="table-responsive intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 text-center whitespace-no-wrap">Nama</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Foto Profil</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Username</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Email</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($waketum as $item)
            <tr>
                <td class="text-center border-b">
                    {{ $item->name }}
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="foto profil" class="rounded-full" src="{{ asset('img/'. $item->profil ) }}">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">
                    {{ $item->username }}

                </td>
                <td class="text-center border-b">
                    {{ $item->email }}
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3 text-theme-9" data-toggle="modal"
                            data-target="#medium-modal-size-preview{{ $item->id }}" href="javascript:;"> <i data-feather="eye"
                                class="w-4 h-4 mr-1"></i> Show </a>

                        <a class="flex items-center mr-3 text-theme-7" href="{{route('akun-wakil-ketua.edit',  $item->id)}}"> <i data-feather="check-square"
                                class="w-4 h-4 mr-1"></i> Edit </a>

                                <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview{{ $item->id }}" class="flex items-center mr-3">
                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete</a>
                           
                            <div class="modal" id="delete-modal-preview{{ $item->id }}">
                                <div class="modal__content">
                                    <form action="{{route('akun-wakil-ketua.destroy', $item->id)}}" method="post" enctype="multipart/form-data">
                                        @method('delete')
                                        @csrf
                                        <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Apakah Kamu Yakin?</div>
                                            <div class="text-gray-600 mt-2">Apakah Anda benar-benar ingin menghapus data ini? Proses ini tidak dapat dibatalkan.</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center"> 
                                            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                                            
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

{{-- modal --}}
@foreach ($waketum as $item)

<div class="modal" id="medium-modal-size-preview{{ $item->id }}">
    <div class="modal__content p-10 text-center">
        <div class="table-responsive">
            <table class="table table-auto">
                <tr class="bg-blue-200">
                    <th>NIP</th>
                    <td class="float-right text-theme-10">{{ $item->nip }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td class="float-right text-theme-10">{{$item->name }}
                    </td>
                </tr>
                <tr class="bg-blue-200">
                    <th>No Telepon</th>
                    <td class="float-right text-theme-10">{{ $item->no_hp }}</td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td class="float-right text-theme-10">{{ $item->username }} </td>
                </tr>
                <tr class="bg-blue-200">
                    <th>Email</th>
                    <td class="float-right text-theme-10">{{ $item->email }} </td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td class="float-right text-theme-10">
                        {{ $item->jabatan }}
                    </td>
                </tr>
                <tr class="bg-blue-200">
                    <th>Alamat</th>
                    <td class="float-right text-theme-10">
                        {{ $item->alamat }}
                    </td>
                </tr>
                <tr>
                    <th>Foto Profil</th>
                    <td>
                        <img alt="foto profil" class="rounded-full w-27 h-27" src="{{ asset('img/'. $item->profil ) }}">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endforeach

@endsection
