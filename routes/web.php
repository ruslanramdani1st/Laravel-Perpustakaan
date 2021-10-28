<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('tentang', function () {
    return "<h1> Hello </h1> <br>" .
        "Selamat datang di webapp saya " .
        "Laravel emang keren";
});

Route::get('saya', function () {
    $nama = "Ruslan Ramdani";
    return " Hello Nama saya Adalah <b>$nama</b>";
});

Route::get('profile', function () {
    // Me retun view ke file yang bernama 'Profile'
    // Di folder 'resouces/wiews'
    $nama = "Ruslan Ramdani";
    return view('profile', compact('nama'));
});

// TUGAS
Route::get('rico', function () {
    // Me retun view ke file yang bernama 'Profile'
    // Di folder 'resouces/wiews'
    $nama = "Rico Achmad Febyawan";
    $kelas = "XII RPL 3";
    $sekolah = "SMK Asslaam Bandung";
    $alamat = "Kopo Permai";
    $tb = 170;
    return view('Nama.rico', compact('nama','kelas','sekolah','alamat', 'tb'));
});

Route::get('aziz', function () {
    // Me retun view ke file yang bernama 'Profile'
    // Di folder 'resouces/wiews'
    $nama = "Aziz Tugabus Taufiq Hirzi";
    $kelas = "XII RPL 3";
    $sekolah = "SMK Asslaam Bandung";
    $alamat = "Sekeawi";
    $tb = 168;
    return view('Nama.aziz', compact('nama','kelas','sekolah','alamat', 'tb'));
});

Route::get('azhar', function () {
    // Me retun view ke file yang bernama 'Profile'
    // Di folder 'resouces/wiews'
    $nama = "Azhar Rizky Aulia";
    $kelas = "XII RPL 3";
    $sekolah = "SMK Asslaam Bandung";
    $alamat = "Rancamanyar Regency";
    $tb = 167;
    return view('Nama.azhar', compact('nama','kelas','sekolah','alamat', 'tb'));
});

Route::get('sultan', function () {
    // Me retun view ke file yang bernama 'Profile'
    // Di folder 'resouces/wiews'
    $nama = "Sultan Darryl Dzulfikar";
    $kelas = "XII RPL 3";
    $sekolah = "SMK Asslaam Bandung";
    $alamat = "Jl.Cicukang Kp.Babakan";
    $tb = 169;
    return view('Nama.sultan', compact('nama','kelas','sekolah','alamat', 'tb'));
});

Route::get('afif', function () {
    // Me retun view ke file yang bernama 'Profile'
    // Di folder 'resouces/wiews'
    $nama = "Rizky Say Afif";
    $kelas = "XII RPL 3";
    $sekolah = "SMK Asslaam Bandung";
    $alamat = "Bojong Malaka Indah";
    $tb = 171;
    return view('Nama.afif', compact('nama','kelas','sekolah','alamat', 'tb'));
});

// Parameter Wajib
Route::get('parameter/{nama}/kelas/{kelas}', function ($nama, $kelas) {
    return "Nama saya adalah : ".$nama . "<br> Kelas : " . $kelas;
});

// Soal
Route::get('biodata/{param1?}/{param2?}/{param3?}/{param4?}/{param5?}', function (
    $nama = null,
    $alamat = null,
    $jk = null,
    $tb = null,
    $bb = null) {
    return view('biodata', compact('nama', 'alamat', 'jk', 'tb', 'bb'));
});
