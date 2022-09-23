<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>oro oustai</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> </head>

<body style="background-color:#C7EA44">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav class="navbar navbar-expand-lg bg-success">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/oro_linijos">Oro Linijos</a> </li>
					<li class="nav-item"> <a class="nav-link active" href="/Salys">Šalys</a> </li>
					<li class="nav-item"> <a class="nav-link active" href="/Avalinijos">Avalinijos</a> </li>
				</ul>
			</div>
		</div>
	</nav>
  <div class="container-fluid mt-3">
	<div class="text-center "> <a href="/oro_linijos_New" class="btn btn-success">Pridėti nauja Oro linija</a> </div>
	<div class="container text-center container-fluid mt-3">
		<div class="row align-items-center ">
		
			<div lascs="bg-info"> 
			<select style="background-color:rgb(245, 248, 54);" class="form-select " aria-label="Default select example">
				<option selected>Paieška pagal šalį</option>
				<option value="1">Amerika</option>
				<option value="2">Tadžikija</option>
				<option value="3">Kataras</option>
			  </select>
			  <div class="mt-3">
			  <a href="/oro_linijos_ieskoti" class="btn btn-warning">Ieškoti</a>
			</div>

			<div class="col">
				<h1 >Oro linijos</h1> </div>
		</div>
	</div>
	<table class="table table-dark ">
		<tbody >
			<tr class="table-active ">
				<th scope="row"></th>
				<td colspan="2" class="table-active ">Pavadinimas</td>
				<td>Šalis</td>
				<td>Lokacija</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th scope="row">1</th>
				<td colspan="2" class="table-active">Delta Air Lines</td>
				<td>Amerika</td>
				<td>33.65656986865283, -84.4242803714317</td>
				<td><a href="/oro_linijos_add" class="btn btn-success">Prideti avalinija</a></td>
				<td><a href="/oro_linijos_istrynti" class="btn btn-warning">Ištrynkite avalinija</a></td>
				<td><a href="/oro_linijos_edit" class="btn btn-danger">Redaguoti</a></td>
				<td><a href="/oro_linijos_delete" class="btn btn-primary">Ištrynti</a></td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td colspan="2" class="table-active">China Southern Airlines</td>
				<td>Tadžikija</td>
				<td>39.04255391350931, 68.6841369817803</td>
				<td><a href="/oro_linijos_add" class="btn btn-success">Prideti avalinija</a></td>
				<td><a href="/oro_linijos_istrynti" class="btn btn-warning">Ištrynkite avalinija</a></td>
				<td><a href="/oro_linijos_edit" class="btn btn-danger">Redaguoti</a></td>
				<td><a href="/oro_linijos_delete" class="btn btn-primary">Ištrynti</a></td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td colspan="2" class="table-active">Lufthansa German Airlines Doha</td>
				<td>Kataras</td>
				<td>25.549494035197263, 51.52541115480998</td>
				<td><a href="/oro_linijos_add" class="btn btn-success">Prideti avalinija</a></td>
				<td><a href="/oro_linijos_istrynti" class="btn btn-warning">Ištrynkite avalinija</a></td>
				<td><a href="/oro_linijos_edit" class="btn btn-danger">Redaguoti</a></td>
				<td><a href="/oro_linijos_delete" class="btn btn-primary">Ištrynti</a></td>
			</tr>
		</tbody>
	</table>
  </div>
</div>







</body>
</html>