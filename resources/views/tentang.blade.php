<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<h1>Ini Adalah Halaman Tentang</h1>
	<p>1.Yang dikumpulkan:</p>
    <p>File laporan berupa screenshot hasil dan code untuk route + controller
Link github repository</p>
 
@endsection