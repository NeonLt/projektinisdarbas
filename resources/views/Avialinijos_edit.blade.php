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
					<li class="nav-item"> <a class="nav-link" href="/Avalinijos">Avalinijos</a> </li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid mt-3">
	<form action method="post">
		<div class="text-center">
			<h1 class="text-primary">Pakoreguokite x avalinija</h1> </div>
		<hr>
		<p>Pavadinimas</p>
		<div class="input-group mb-3">
			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </div>
		<select class="form-select" aria-label="Select country">
			<option selected>Pasirinkite šalį</option>
			<option value="3"></option>
		</select>
		<hr> <a href="#" class="btn btn-success">Sukurti</a> </form>
	</div>
</body>

</html>