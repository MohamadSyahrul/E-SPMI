@extends('layout.master')
@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Standar 
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="{{ route('standar.create')}}" class="button text-white bg-theme-1 shadow-md mr-2">Add Standar</a>
       
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="table-responsive intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 text-center whitespace-no-wrap">No</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Kode Standar</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Nama Standar</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tanggal Standar</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($sn as $item)
            <tr>
                <td class="text-center border-b">
                    {{ $loop->iteration }}
                </td>
                <td class="text-center border-b">
                    {{ $item->kode_sn }}

                </td>
                <td class="text-center border-b">
                    {{ $item->nama_sn }}
                </td>
                <td class="text-center border-b">
                    {{date('d F Y',strtotime( $item->tanggal_sn))}}
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3 text-theme-7" href="{{route('standar-nasional.edit',$item->id)}}"> 
                            <i data-feather="check-square" class="w-4 h-4 mr-1"></i> 
                            Edit 
                        </a>

                                <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview{{ $item->id }}" class="flex items-center mr-3">
                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete</a>
                           
                            <div class="modal" id="delete-modal-preview{{ $item->id }}">
                                <div class="modal__content">
                                    <form action="{{route('standar-nasional.destroy', $item->id)}}" method="post" enctype="multipart/form-data">
                                        @method('delete')
                                        @csrf
                                        <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Apakah Kamu Yakin?</div>
                                            <div class="text-gray-600 mt-2">Apakah Anda benar-benar ingin menghapus data ini? Proses ini tidak dapat dibatalkan.</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center"> 
                                            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                                            
                                            <button type="submit" class="button w-24 bg-theme-6 text-white">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
