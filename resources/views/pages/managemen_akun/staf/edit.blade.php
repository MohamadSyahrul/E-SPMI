@extends('layout.master')
@section('content')
<div class="col-span-12 lg:col-span-8 xxl:col-span-12">
    <!-- BEGIN: Display Information -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center p-5 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">
                Edit Profil
            </h2>
        </div>
        <div class="p-5">
            <form action="{{ route('akun-staf.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-4">
                        <div class="border border-gray-200 rounded-md p-5">
                            <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                <img class="rounded-md" alt="foto profil"
                                    src="{{asset('img/'. $item->profil)}}">
                            </div>
                            <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                <button type="button" class="button w-full bg-theme-1 text-white">Change Photo</button>
                                {{-- <input type="file" name="profil" class="w-full h-full top-0 left-0 absolute opacity-0"> --}}
                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0" name="profil" placeholder="Upload Gambar">

                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-8">
                        <div>
                            <label>NIP</label>
                            <input type="number" class="input w-full border bg-gray-100 mt-2"
                                name="nip" style="color: slategrey;" value="{{ $item->nip }}"
                                placeholder="Masukan NIP Anda">
                        </div>
                        <div class="mt-2">
                            <label>Nama</label>
                            <input type="text" name="name"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" value="{{ $item->name }}" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="mt-2">
                            <label>No Telepon</label>
                            <input type="number" name="no_hp"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" value="{{ $item->no_hp }}"
                                placeholder="Masukan Nomor Telepon">
                        </div>
                        <div class="mt-2">
                            <label>Alamat</label>
                            <input type="text" name="alamat"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" value="{{ $item->alamat }}" placeholder="Masukan Alamat Anda">
                        </div>
                        <div class="mt-2">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" value="{{ $item->jabatan }}"
                                placeholder="Masukan Jabatan Anda">
                        </div>
                        <div class="mt-2">
                            <label>Username</label>
                            <input type="text" name="username"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" value="{{ $item->username }}" placeholder="Masukan Username">
                        </div>
                        <div class="mt-2">
                            <label>Email</label>
                            <input type="email" name="email"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" value="{{ $item->email }}" placeholder="Masukan Email">
                        </div>
                        <div class="mt-2">
                            <label>Password</label>
                            <input type="password" name="password"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" placeholder="Masukan Password Baru">
                        </div>
                        <div class="mt-2">
                            <label>Password Confirmation</label>
                            <input type="password" name="password_confirmation"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" placeholder="Konfirmasi Password Baru">
                        </div>
                        <div class="text-right mt-5">
                            <a href="{{route('akun-staf.index')}}" class="button w-24 border text-gray-700 mr-1">Cancel</a>
                            <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Display Information -->
    <!-- BEGIN: Personal Information -->

    <!-- END: Personal Information -->
</div>
@endsection
