<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	{{-- menghubungkan dengan view template master --}}
	@extends('layouts.master')
	{{-- isi bagian judul halaman --}}
	{{-- cara penulisan isi section yang pendek --}}
	@section('judul_halaman','Halaman beranda')

	{{-- isi bagian konten --}}
	{{-- cara penulisan isi section panjang --}}
	@section('konten')
		<table border="1">
			<tr>
				<td>email</td>
				<td>:</td>
				<td>dewipuspitt4@gmail.com</td>
			</tr>
			<td>Hp</td>
			<td>:</td>
			<td>083815617252</td>

		</table>
	@endsection
</body>
</html>