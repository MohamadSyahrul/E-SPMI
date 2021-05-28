@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Staf
    </h2>
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
            @foreach ($items as $item)
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
                            data-target="#medium-modal-size-preview{{ $item->id }}" href="javascript:;"> <i
                                data-feather="eye" class="w-4 h-4 mr-1"></i> Show </a>
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
@foreach ($items as $item)

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
