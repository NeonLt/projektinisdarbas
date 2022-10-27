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
	@foreach ($airlines as $airline)

	@endforeach
	<div class="container-fluid mt-3">
	<form action="/oro_linijos/{{$airline -> id}}" method="post">
		@csrf

		<div class="text-center">
			<h1 class="text-primary">Pakoreguokite {{$airline ->name}} oro linija</h1> </div>
		<hr>
		<div class="mb-3">
			<label class="form-label"  for="name">Pavadinimas</label>
			<input value="{{$airline ->name}}" type="text" name='name' id="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>
		<select name="country_name" id="country_name" class="form-select">
		<option disabled selected>Pasirinkite šalį</option>
		@foreach ($country as $salis)


      <option value="{{ $salis->name }}">{{ $salis->name }}</option>
			@endforeach
		</select>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			<button type="submit" class="btn btn-success mt-4">Redaguoti</button>
	 </form>
	</div>
</body>
</html>
