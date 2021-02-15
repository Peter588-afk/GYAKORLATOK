<?php

require_once 'config.php';
$msg="";
print_r($_POST);
;
if(isset($_POST['mentes'])){
    extract($_POST);
    $sql="insert into maszok values(null,'{$nev}','{$ferfi}')";
    
        $stmt=$db->exec($sql);
        if($stmt){
            $msg="Siekres adatbeírás";
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
	<title>Munkasok</title>
</head>

<body>
    <div class="container border">
        <div class="row m-1 p-2">   
            <div class="col-5">
                <form action="" method="post">
                <div class="form-group">
                        <label for="">Új mászó neve:</label>
                        <input type="text" name="nev" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Neme:</label>
                        <input type="number" name="ferfi" class="form-control" value="" min="0" max="1">
					</div>
                    <input type="submit" name="mentes" value="mentés" >
                </form>
              </div>
         </div>
    </div>
    <div><?=$msg?></div>
</body>
</html>  