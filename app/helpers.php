<?php

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\Storage;

function active_class($path, $active = 'active') {
  return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function is_active_route($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

function show_class($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

function generateKodePustaka($kode_bawaan){

    return $kode = strtoupper(preg_replace("/[^bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/", "", $kode_bawaan));

}

/** Function generate kode */
// function generateKode($tanggal,$kode_satuan,$nama){

//     $date = strtotime($tanggal);
//     $date_format = date('Y-m-d',$date);
//     $tanggal = substr($date_format,8,2);
//     $bulan = substr($date_format,5,2);
//     $bulan_romawi = getRomawi($bulan);
//     $tahun = substr($date_format,2,2);

//     $nama_asset = generateKodePustaka($nama);

//     return $kode = $nama_asset . '/' . $kode_satuan . '/' . $tanggal . '/' . $bulan_romawi . '/' . $tahun;
// }
// function generate kode standar nasional
function generateKode($tanggal_sn,$nama_sn){

    $date = strtotime($tanggal_sn);
    $date_format = date('Y-m-d',$date);
    $tanggal_sn = substr($date_format,8,2);
    $bulan = substr($date_format,5,2);
    $bulan_romawi = getRomawi($bulan);
    $tahun = substr($date_format,2,2);

    $nama_standar = generateKodePustaka($nama_sn);

    return $kode = $nama_standar . '.' . $tanggal_sn . '.' . $bulan_romawi . '.' . $tahun;
}

function generateKodeSN($kode_bawaan, $tanggal_sn){

    $date = strtotime($tanggal_sn);
    $date_format = date('Y-m-d',$date);
    $tanggal_sn = substr($date_format,8,2);
    $bulan = substr($date_format,5,2);
    $nama_sn = strtoupper(preg_replace("/[^SN]/", "", $kode_bawaan));

    return $kode = $nama_sn . '.' . $tanggal_sn . '.' . $bulan;
}
/**Function mendapatkan bilangan romawi untuk generate */
function getRomawi($bln){
    switch ($bln){
        case 1:
            return "I";
            break;
        case 2:
            return "II";
            break;
        case 3:
            return "III";
            break;
        case 4:
            return "IV";
            break;
        case 5:
            return "V";
            break;
        case 6:
            return "VI";
            break;
        case 7:
            return "VII";
            break;
        case 8:
            return "VIII";
            break;
        case 9:
            return "IX";
            break;
        case 10:
            return "X";
            break;
        case 11:
            return "XI";
            break;
        case 12:
            return "XII";
            break;
        }
    }

/** Function Ubah format waktu */
function dateFormat($tanggal){
    $date = strtotime($tanggal);
    $date_format = date('Y-m-d',$date);

    return $date_format;
}



/** Function Penyusutan Aset */
function penyusutanAset($tanggal){
    $tanggal_terima = Carbon::parse($tanggal);
    $sekarang = Carbon::now();

    return $diff = $tanggal_terima->diffInYears($sekarang);

}

/** Function Masa Pakai Aset */
function masaPakaiAset($masa_pakai){

    return $penyebut = 100 / $masa_pakai;

}

function storeGambar($user){
    
        $nm = $user;
        $namaFile = time() . rand(100, 999) . "." .$nm->getClientOriginalExtension();
        $nm->move(public_path() . '/img', $namaFile);
    
    return $namaFile;

}
