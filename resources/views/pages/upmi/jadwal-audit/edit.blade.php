@extends('layout.master')
@section('content')

<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Edit Jadwal Audit
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: edit jadwal-->
        <form action="{{ route('jadwal-audit.update', $item->id)}}" method="POST">
            @method('put')
            @csrf
            <div class="intro-y box p-5">
                <div>
                    <label>Kodejadwal</label>
                    <input type="text" class="input w-full border mt-2" name="kode_jadwal" value="{{$item->kode_jadwal}}" disabled />
                </div>

                <div class="relative mt-2">
                    <label>Standar</label>
                    <select name="id_standar" class="input w-full border mt-2" required>
                        <option selected disabled>Pilih...</option>
                        @foreach($standar as $snr)
                        <option value="{{ $snr->id }}">{{$snr->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="relative mt-2">
                    <label>Auditor</label>
                    <select name="id_auditor" class="input w-full border mt-2" required>
                        <option selected disabled>Pilih...</option>
                        @foreach($auditor as $audit)
                        <option value="{{ $audit->id }}">{{$audit->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="relative mt-2">
                    <label>Program Studi</label>
                    <input name="prodi" value="{{ $item->prodi }}" class="input w-full border mt-2">
                </div>
                <div class="relative mt-2">
                    <label>Tahun Pengukuran Mutu</label>
                    <input name="tahun" value="{{ $item->tahun }}" class="input w-full border mt-2">
                    <h6 style="color: #1900ff;">contoh: 2021/2022<span style="color: #ea5455;">*</span></h6>
                </div>

                <div class="relative mt-2">
                    <label> Tanggal Mulai</label>
                    <div class="relative w-full mt-1">
                        <span class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                            <i data-feather="calendar" class="w-4 h-4"></i> 
                        </span> 
                        <input type="date" name="tgl_mulai" value="{{ $item->tgl_mulai }}" class="input input pl-12 w-full border">
                    </div>
                </div>

                <div class="relative mt-2">
                    <label> Tanggal selesai</label>
                    <div class="relative w-full mt-1">
                        <span class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                            <i data-feather="calendar" class="w-4 h-4"></i> 
                        </span> 
                        <input type="date" name="tgl_selesai" value="{{ $item->tgl_selesai }}" class="input input pl-12 w-full border">
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
