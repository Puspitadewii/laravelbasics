<!DOCTYPE html>
<html>
<head>
	<title>beljar laravel</title>
</head>
<body>
 	<h3>Hai nama saya: {{$nama}} </h3>
 	jurusan di sekolah saya:
 	@foreach($skil as $skill)
 	<li>{{$skill}}</li>
 	@endforeach
</body>
</html>