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
	<h3 style="margin: 20px 0 20px 600px">Edit Buku</h3>
	<i class="fa fa-heart"></i>
	<div class="book" style="margin: 0 465px;">
		<div class="container">
			<form action="/buku/{{$buku->id}}" method="POST">
				<p>Judul Buku :</p><input id="form" type="text" name="title" placeholder="judul buku" value="{{$buku->title}}"><br>
				<p>Penerbit :</p><input id="form" type="text" name="penerbit" placeholder="penerbit" value="{{$buku->penerbit}}"><br>
				<p>Tahun :</p><input id="form" type="text" name="tahun" placeholder="tahun" value="{{$buku->tahun}}"><br>
				<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{csrf_token() }}">
				<input id="del" type="submit" name="name" value="edit">
			</form>
		</div>
	</div>
</body>
</html>