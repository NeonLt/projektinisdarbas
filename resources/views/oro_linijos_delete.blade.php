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
	<div class="text-center">
		<h1>Ar tikrai norite ištrynti {{$airlines -> country_name}} oro uostas</h1>
		<p>šis veiksmas ištryns viska kas susije su {{$airlines -> country_name}} oro uostas</p>
		<div class="btn-group" role="group" aria-label="Basic mixed styles example">
			<a href="/oro_linijos_istrynti/{{$airlines->id}}/confirm" class="btn btn-success">Ištrinti</a>
			<a type="button" href="/" class="btn btn-danger">ne</a>
		</div>
	</div>
</body>

</html>