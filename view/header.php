<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Miblog</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="./public/css/bootstrap.min.css">
	<link rel="stylesheet" href="./public/css/app.css">
</head>
<body>
<header id="header-container">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-8"><h1>MI BLOG</h1></div>
			<div class="col-4 d-flex justify-content-end align-items-center">

				<button class="navbar-toggler d-block d-md-none" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
				    &#9776;
				  </button>
        		<a href="login" class="login d-none d-md-block text-uppercase font-weight-bold"><b>Ingresar</b></a>

        	</div>
			</div>
		</div>
	</div>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse col-12" id="navMenu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="panel">Panel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="catalogo">Catalogo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login">Ingresar</a>
      </li>
    </ul>
  </div>
</nav>