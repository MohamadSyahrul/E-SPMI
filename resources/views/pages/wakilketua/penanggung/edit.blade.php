@extends('layout.master')
@section('content')
<div class="col-span-12 lg:col-span-8 xxl:col-span-12">
    <!-- BEGIN: Display Information -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center p-5 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">
                Edit Penanggung Jawab
            </h2>
        </div>
        <div class="p-5">
            <form action="{{ route('penanggung-jawab.update', $item->id)}}" method="POST" enctype="multipart/form-data">
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
                                name="nik" style="color: slategrey;" value="{{ $item->nik }}"
                                placeholder="Masukan NIP Anda" onKeyPress="if(this.value.length==19) return false;" >
                        </div>
                        <div> 
                            <label>Jabatan</label> 
                                <select name="id_jabatan" class="input w-full border bg-gray-100 mt-2">
                                <option value="{{ $item->id_jabatan }}">Pilih...</option>
                                @foreach($jabatan as $item)
                                    <option value="{{ $item->id }}">{{$item->nama}}</option>
                                @endforeach
                                </select> 
                        </div>
                        <div class="mt-2">
                            <label>Nama</label>
                            <input type="text" name="nama"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" value="{{ $item->nama }}" placeholder="Masukan Nama Anda">
                            </div>
                            <div class="mt-2">
                                <label>Email</label>
                                <input type="email" name="email"
                                    class="input w-full border bg-gray-100 mt-2"
                                    style="color: slategrey;" value="{{ $item->email }}" placeholder="Masukan Email">
                            </div>
                        <div class="mt-2">
                            <label>No Telepon</label>
                            <input type="number" name="no_hp"
                                class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" value="{{ $item->no_hp }}"
                                placeholder="Masukan Nomor Telepon" onKeyPress="if(this.value.length==12) return false;" >
                        </div>
                        
                        <div class="text-right mt-5">
                            <a href="{{route('penanggung-jawab.index')}}" class="button w-24 border text-gray-700 mr-1">Cancel</a>
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
