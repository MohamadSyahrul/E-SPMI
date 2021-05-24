@extends('layout.master')
@section('content')

<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Tambah Jabatan
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Tambah Jabatan -->
        <form action="{{route('jabatan.update', $item->id)}}" method="POST">
            @method('put')
            @csrf
            <div class="intro-y box p-5">
                <div>
                    <label>Kode Jabatan</label>
                    <input type="text" class="input w-full border mt-2" name="kode_jabatan" value="{{$item->kode_jabatan}}" disabled />
                </div>
                <div class="relative mt-2">
                    <label>Nama Jabatan</label>
                    <input type="text" class="input w-full border mt-2" name="nama" value="{{ $item->nama }}" placeholder="Nama Jabatan">
                </div>
                <div class="text-right mt-5">
                    <button type="reset" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                    <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </form>
    </div>
</div>
</div>
@endsection
