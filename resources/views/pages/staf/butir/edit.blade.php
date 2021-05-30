@extends('layout.master')
@section('content')
<div class="col-span-12 lg:col-span-8 xxl:col-span-12">
    <!-- BEGIN: Display Information -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center p-5 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">
                Edit Butir Standar
            </h2>
        </div>
        <div class="p-5">
            <form action="{{ route('butir-sop.update', $item->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-12">
                        <div>
                            <label>Kode Butir</label>
                            <input type="text" class="input w-full border bg-gray-100 mt-2"
                                name="kode_butir" style="color: slategrey;" value="{{ $item->kode_butir }}"
                                placeholder="Kode Butir Otomatis" disabled>
                        </div>
                        <div> 
                            <label>Standar</label> 
                                <select name="id_standar" class="input w-full border bg-gray-100 mt-2">
                                <option value="{{ $item->id_standar }}">Pilih...</option>
                                @foreach($standar as $item)
                                    <option value="{{ $item->id }}">{{$item->nama}}</option>
                                @endforeach
                                </select> 
                        </div>
                        <div class="mt-2">
                            <label>Isi Butir SOP</label>
                            <textarea type="text" name="isi" data-feature="basic" class="summernote w-full border mt-2 flex-1"
                            ></textarea>
                            </div>
                            <div class="mt-2">
                                <label>Indikator</label>
                                <input type="text" name="indikator"
                                    class="input w-full border bg-gray-100 mt-2"
                                    style="color: slategrey;" value="{{ $item->indikator }}" placeholder="Masukan indikator">
                            </div>
                        <div class="mt-2">
                            <label>Tanggal Selesai</label>
                            <div class="relative w-full mt-1">
                                <span class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                                    <i data-feather="calendar" class="w-4 h-4"></i> 
                                </span> 
                                <input type="date" name="tgl_butir" value="{{ old('tgl_butir') }}" placeholder="Tanggal Penetapan Standar" class="input pl-12 w-full border">
                            </div>
                        </div>
                        
                        <div class="text-right mt-5">
                            <a href="{{route('butir-sop.index')}}" class="button w-24 border text-gray-700 mr-1">Cancel</a>
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
