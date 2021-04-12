<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">       
		<span class="navbar-brand">Mozi</span>
	<div class="navbar-collapse collapse " id="menuid">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?f=1">Napi díj személyre</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?f=2">Bevételek</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?f=3">Új hajó</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?f=4">Filmek mozinként</a></li>
		</ul>
	</div>
</nav>  

<main role="main" class="container p-2">
	<div class="jumbotron">
		<?php
			if(isset($_GET['f'])){
				$f=$_GET['f'];
				include "feladat".$f.".php";
			}
			else{
				include "fooldal.php";
			}   
		?>
    </div>
</main>
    
</body>
</html>