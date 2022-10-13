<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> </head>

<body  class="bg-primary text-white" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav class="navbar navbar-expand-lg bg-light"  >
		<div class="container-fluid" >
			<a class="navbar-brand"  href="#"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/">Oro Linijos</a> </li>
					<li class="nav-item"> <a class="nav-link active" href="/Salys">Šalys</a> </li>
					<li class="nav-item"> <a class="nav-link active" href="/Avalinijos">Avalinijos</a> </li>
				</ul>
			</div>
		</div>
	</nav>
  <div class="container-fluid mt-3">
	<div class="text-center"> <a href="/Avalinijos_New" class="btn" style="background-color:rgba(189, 82, 255, 0.98);">Pridėti nauja Avalinija</a> </div>
	<div class="container text-center">
		<div class="row align-items-center">
			<div class="col mt-3">
				<h1>Avalinijos</h1> </div>
		</div>
	</div>
	<table class="table table-dark">
		<tbody>
			<tr class="table-active">
				<th scope="row">Avalinijos</th>
				<th colspan="2" class="table-active">Šalys</th>
			</tr>
			@foreach ($airlines as $airline)
					<tr>
						<td scope="row"> {{ $airlines->name}}</td>
						<td>{{ $airlines->country_name}}</td>
						<td><a href="/Avalinijos_edit" class="btn btn-danger">Redaguoti</a></td>
						<td><a href="/Avalinijos_delete" class="btn btn-primary">Ištrynti</a></td>
					</tr>
			@endforeach
		</tbody>
	</table>
  </div>
</body>
</html>