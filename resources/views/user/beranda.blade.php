
	{{-- menghubungkan dengan view template master --}}
	@extends('layouts.master')
	{{-- isi bagian judul halaman --}}
	{{-- cara penulisan isi section yang pendek --}}
	@section('judul_halaman','Halaman beranda')

	{{-- isi bagian konten --}}
	{{-- cara penulisan isi section panjang --}}
	@section('konten')
		<h2>Selamat datang</h2>
		<p>ini halaman home</p>
	@endsection
