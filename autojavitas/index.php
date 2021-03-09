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
		<span class="navbar-brand">Auto Javitasok</span>
	<div class="navbar-collapse collapse " id="menuid">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?f=1">Osszes javitas</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?f=2">Javitott tipusok</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?f=3">Javitasi idok</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?f=4">Uj auto tipus</a></li>
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