<!DOCTYPE html>
<html>
<head>
	<title>Buku Favorit</title>
	<link rel="stylesheet" href="{!! asset('css/style.css') !!}" media="screen">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet" type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<header>
		<h1>My Favorite Books</h1>
	</header>
	<h3 style="margin: 20px 0 20px 600px">Tambah Buku</h3>
	<i class="fa fa-heart"></i>
	<div class="book" style="margin: 0 465px;">
		<div class="container">
			<form action="/buku" method="POST">
				<p>Judul Buku :</p><input id="form" type="text" name="title"><br>
				<p>Penerbit :</p><input id="form" type="text" name="penerbit"><br>
				<p>Tahun :</p><input id="form" type="text" name="tahun"><br>
				<input type="hidden" name="_token" value="{{csrf_token() }}">
				<input id="del" type="submit" name="name" value="Tambah">
			</form>
			</div>
	</div>
</body>
</html>