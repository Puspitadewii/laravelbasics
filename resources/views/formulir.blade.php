<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/formulir/proses" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
		Nama:
		<input type="text" name="nama">
		Alamat:
		<input type="text" name="alamat">
		<input type="submit" value="Simpan">
	</form>
</body>
</html>