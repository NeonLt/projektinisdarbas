<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>oro oustai</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> </head>

<body style="background-color:#2192FF">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav style="background-color:#38E54D"class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/">Oro Linijos</a> </li>
					<li class="nav-item"> <a class="nav-link active" href="/Salys">Šalys</a> </li>
					<li class="nav-item"> <a class="nav-link active" href="/Avialinijos">Avialinijos</a> </li>
				</ul>
			</div>
		</div>
	</nav>
  <div class="container-fluid mt-3">
	<div class="text-center "> <a style="background-color: #9CFF2E" href="/oro_linijos_New" class="btn">Pridėti nauja Oro linija</a> </div>
	<div class="container text-center container-fluid mt-3">
		<div class="row align-items-center ">
		
			<div lascs="bg-info"> 
			<select style="background-color:#38E54D;" class="form-select " aria-label="Default select example">
				<option selected>Paieška pagal šalį</option>
				<option value="1">Amerika</option>
				<option value="2">Tadžikija</option>
				<option value="3">Kataras</option>
			  </select>
			  <div class="mt-3">
			  <a href="/oro_linijos_ieskoti" style="background-color:#9CFF2E" class="btn">Ieškoti</a>
			</div>

			<div class="col">
				<h1 style="color:#FDFF00">Oro linijos</h1> </div>
		</div>
	</div>
	<table class="table table-dark ">
		<tbody >
			<tr class="table-active ">
				<th scope="row"></th>
				<td>Pavadinimas</td>
				<td>Šalis</td>
				<td>lokacija</td>
				<td>action</td>
			</tr>
			@foreach ($airlines as $airline)
				<tr>
					<th scope="row">1</th>
					<td>{{ $airline->name}}</td>
					<td>{{ $airline->country_name}}</td>
					<td></td>
					<td><a href="/oro_linijos_add" style="background-color: #38E54D" class="btn">Prideti avalinija</a>
					<a href="/oro_linijos_istrynti/{{$airline ->id}}" style="background-color: #FDFF00" class="btn">Ištrynkite avalinija</a>
					<a href="/oro_linijos_edit/{{$airline ->id}}" class="btn btn-danger">Redaguoti</a>
					<a href="/oro_linijos_delete" class="btn btn-primary">Ištrynti</a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
		</div>
	</div>
</body>
</html>