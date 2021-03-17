<?php

require_once 'config.php';
$msg="";
;
if(isset($_POST['mentes'])){
    extract($_POST);
    $sql="insert into versenyszam values(null,'{$nev}','{$tipus}','{$nem}')";
    
        $stmt=$db->exec($sql);
        if($stmt){
            $msg="Sikeres adatbeírás";
        }
}

?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>      
	<title>Versenyek</title>
</head>

<body>
    <div class="container border">
        <div class="row m-1 p-2">   
            <div class="col-5">
                <form action="" method="post">
                <div class="form-group">
                        <label for="">Új versenyszám neve:</label>
                        <input type="text" name="nev" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Új versenyszám tipusa:</label>
                        <input type="text" name="tipus" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Új versenyszám nem:</label>
                        <input type="text" name="nem" class="form-control" value="">
                    </div>
                    <input type="submit" name="mentes" value="mentés" >
                </form>
              </div>
         </div>
    </div>
    <div><?=$msg?></div>
</body>
</html>