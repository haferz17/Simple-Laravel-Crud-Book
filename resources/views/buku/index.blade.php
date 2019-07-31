<!DOCTYPE html>
<html>
<head>
	<title>Buku Favorit</title>
	<link rel="stylesheet" href="{!! asset('css/style.css') !!}" media="screen">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet" type='text/css'>
	<link href="{!! asset('font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
</head>
<body>
	<header>
		<h1>My Favorite Books</h1>
	</header>
	<table>
		<td class="head">
			<h3>Buku Pemrogaman</h3>
			<i class="fa fa-heart"></i>
			<a class="add" href="http://127.0.0.1:8000/buku/create"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Buku</a>
		</td>
		<tr>
		<td class="content">

			@foreach($buku as $buku)

			<div class="book">
				<img src="{{asset('img/laravel.jpg')}}">
				<h2>{{$buku->title}}</h2>
				<div class="container"><hr>
					<p>Penerbit : {{$buku->penerbit}}</p><hr>
					<p>Tahun : {{$buku->tahun}}</p><hr>
					<a href="/buku/{{$buku->id}}/edit"><i class="fa fa-pencil"></i> Edit</a>
					<form action="/buku/{{$buku->id}}" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token() }}">
						<input type="hidden" name="_method" value="delete">
						<input id="del" type="submit" name="name" value="Hapus">
					</form>
				</div>
			</div>

			@endforeach

		</td>
		</tr>
	</table>
</body>
</html>
