@extends('layout.master')
@section('content')

<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Tambah Unit
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Tambah Unit -->
        <form action="{{route('unit.update', $item->id)}}" method="POST">
            @method('put')
            @csrf
            <div class="intro-y box p-5">
                <div>
                    <label>Kode Unit</label>
                    <input type="text" class="input w-full border mt-2" name="kode_unit" value="{{$item->kode_unit}}" disabled />
                </div>
                <div class="relative mt-2">
                    <label>Nama Unit</label>
                    <input type="text" class="input w-full border mt-2" name="nama" value="{{ $item->nama }}" placeholder="Nama Unit">
                </div>
                <div class="relative mt-2"> 
                    <label>Jabatan</label> 
                        <select name="id_jabatan" class="input w-full border bg-gray-100 mt-2">
                        <option value="{{ $item->id_jabatan }}">Pilih...</option>
                        @foreach($jabatan as $item)
                            <option value="{{ $item->id }}">{{$item->nama}}</option>
                        @endforeach
                        </select> 
                </div>
                <div class="relative mt-2"> 
                    <label>Penanggung Jawab</label> 
                        <select name="id_penanggung_jawab" class="input w-full border bg-gray-100 mt-2">
                        <option value="{{ $item->id_penanggung_jawab }}">Pilih...</option>
                        @foreach($pn as $item)
                            <option value="{{ $item->id }}">{{$item->nama}}</option>
                        @endforeach
                        </select> 
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
