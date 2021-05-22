@extends('layout.master')
@section('content')

<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Tambah Standar Nasional
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Tambah Standar Nasional -->
        <form action="{{route('standar-nasional.store')}}" method="POST">
            @csrf
            <div class="intro-y box p-5">
                <div>
                    <label>Kode Standar Nasional</label>
                    <input type="text" class="input w-full border mt-2" name="kode_sn" placeholder="Kode Standar Nasional (auto generate)" disabled />
                </div>
                <div class="relative mt-2">
                    <label>Nama Standar Nasional</label>
                    <input type="text" class="input w-full border mt-2" name="nama_sn" value="{{ old('nama_sn') }}" placeholder="Nama Standar Nasional">
                </div>
                <div class="relative mt-2">
                    <label> Tanggal Standar Nasional</label>
                    <div class="relative w-full mt-1">
                        <span class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                            <i data-feather="calendar" class="w-4 h-4"></i> 
                        </span> 
                        <input type="text" name="tanggal_sn" value="{{ old('tanggal_sn') }}" class="datepicker input pl-12 w-full border">
                    </div>
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
