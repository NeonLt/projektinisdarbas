<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> </head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/oro_linijos">Oro Linijos</a> </li>
					<li class="nav-item"> <a class="nav-link" href="/Salys">Šalys</a> </li>
					<li class="nav-item"> <a class="nav-link" href="/Avialinijos">Avialinijos</a> </li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid mt-3">
		@foreach ($airports as $airport)
				
		@endforeach
	<form action="/airports_add_airline_post/{{ $airport -> id }}" method="post">
		<div class="text-center">
			@foreach ($airlines as $airline)
				
			@endforeach
			<h1 class="text-primary">Pridekite prie {{$airline->name}} avalinija</h1> 
		</div>
		<hr>
		<select name="airline_pavadinimas" id="airline_pavadinimas" class="form-select" aria-label="Select country">
			<option selected>Pasirinkite avalinija</option>
			@foreach ($airports as $airport)
			<option value="{{$airport->name_ava}}">{{$airport->name_ava}}</option>
			@endforeach
		</select>
		<hr> 
		<button type="submit" class="btn btn-success">Sukurti</button> 
	</form>
	</div>
</body>
</html>