@extends('layout.master')
@section('content')
<div class="col-span-12 lg:col-span-8 xxl:col-span-12">
    <!-- BEGIN: Display Information -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center p-5 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">
                Edit Standar Operasional
            </h2>
        </div>
        <div class="p-5">
            <form action="{{ route('standar.update', $item->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-12">
                        <div>
                            <label>Kode Standar Operasional</label>
                            <input type="text" class="input w-full border bg-gray-100 mt-2" name="kode_standar"
                                style="color: slategrey;" value="{{ $item->kode_standar }}">
                        </div>
                        <div class="mt-2">
                            <label>Unit</label>
                            <select name="id_unit" style="color: slategrey;" class="input w-full border bg-gray-100 mt-2">
                                <option value="{{ $item->id_unit }}">Pilih...</option>
                                @foreach($unit as $item)
                                <option value="{{ $item->id }}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <label>Standar Nasional</label>
                            <select name="id_sn" style="color: slategrey;" class="input w-full border bg-gray-100 mt-2">
                                <option value="{{ $item->id_sn }}">Pilih...</option>
                                @foreach($standar_nasional as $item)
                                <option value="{{ $item->id }}">{{$item->nama_sn}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <label>Nama Standar Operasional</label>
                            <input type="text" name="nama" class="input w-full border bg-gray-100 mt-2"
                                style="color: slategrey;" value="{{ $item->nama }}" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="mt-2">
                            <label>Penanggung Jawab</label>
                            <select name="id_penanggung_jawab" style="color: slategrey;" class="input w-full border bg-gray-100 mt-2">
                                <option value="{{ $item->id_penanggung_jawab }}">Pilih...</option>
                                @foreach($pj as $item)
                                <option value="{{ $item->id }}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <label> Tanggal Standar Operasional</label>
                            <div class="relative w-full mt-1">
                                <span
                                    class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                </span>
                                <input type="text" style="color: slategrey;" name="tgl_standar" value="{{ old('tgl_standar') }}"
                                    class="datepicker input pl-12 w-full border">
                            </div>
                        </div>

                        <div class="text-right mt-5">
                            <a href="{{route('standar.index')}}"
                                class="button w-24 border text-gray-700 mr-1">Cancel</a>
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
