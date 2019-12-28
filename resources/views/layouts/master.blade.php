<!DOCTYPE html>
<html>
<head>
	<title>sistem blade laravel</title>
</head>
<body>
	<header>
		<h2>blog malas ngoding</h2>
	
	<nav>
		<a href="/blog">Home</a>
		|
		<a href="/blog/tentang">Tentang</a>
		|
		<a href="/blog/kontak">Kontak</a>
	</nav>
	</header>
	{{-- bagian judul halaman --}}
	<h3>@yield('judul_halaman')</h3>

	{{-- bagian konten blog --}}
	@yield('konten')
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p> 
	</footer>

</body>
</html>