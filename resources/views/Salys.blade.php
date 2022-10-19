<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Šalys</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> </head>

<body class="bg-primary text-white">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav class="navbar navbar-expand-lg bg-light">
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

    <div class="text-center"> <a href="/salys_New" class="btn"  style="background-color:rgb(154, 243, 0);">Pridėti nauja šalį</a>
      <a href="/salys_New" class="btn "  style="background-color:rgba(189, 82, 255, 0.98);">Šalys be aviakompanijos</a>
      <a href="/salys_New" class="btn"  style="background-color:rgba(189, 82, 255, 0.98);">Šalys be aviakompanijos ir oro uosto</a>
      <div class="text-center">
        <div class="row align-items-center">
          <div class="col mt-3">
            <h1>Šalys</h1> </div>
        </div>
      </div>
      <table class="table table-dark">
        <tbody>
          <tr class="table-active">
            <th scope="row">Šalis</th>
            <th class="table-active">Šalies kodas (ISO)</th>
            <th scope="row"></th>
            <th scope="row"></th>
          </tr>
          @foreach($salys as $salis)


          <tr>
            <td scope="row">{{ $salis->name }}</td>
            <td >{{ $salis->ISO }}</td>
            <td></td>
            <td><a href="/salys_delete/{{$salis->id}}" class="btn btn-primary">Ištrinti</a>
            <a href="/salys_edit/{{$salis->id}}" class="btn btn-danger">Redaguoti</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
