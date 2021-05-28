@extends('layout.master')
@section('content')

<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Tambah Job Desk
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Tambah Job Desk -->
        <form action="{{route('deskripsi-pekerjaan.store')}}" method="POST">
            @csrf
            <div class="intro-y box p-5">

                <div>
                    <label>Kode Job Desk</label>
                    <input type="text" name="kode_job" class="input w-full border mt-2"
                        placeholder="Kode Auto Generate" disabled>
                </div>

                <div>
                    <label>Jabatan</label>
                    <select name="id_jabatan" class="input w-full border mt-2" required>
                        <option selected disabled>Pilih...</option>
                        @foreach($jabatan as $jbt)
                        <option value="{{ $jbt->id }}">{{$jbt->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Penanggung Jawab</label>
                    <select name="id_penanggung_jawab" class="input w-full border mt-2" required>
                        <option selected disabled>Pilih...</option>
                        @foreach($pn as $pnj)
                        <option value="{{ $pnj->id }}">{{$pnj->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Deskripsi Pekerjaan</label>
                    <textarea name="deskripsi" class="summernote w-full border mt-2">
                    </textarea>
                </div>

                <div>
                    <label> Tanggal Penetapan</label>
                    <div class="relative w-full mt-1">
                        <span class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                            <i data-feather="calendar" class="w-4 h-4"></i> 
                        </span> 
                        <input type="text" name="tgl_terima" value="{{ old('tgl_terima') }}" class="datepicker input pl-12 w-full border">
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
