<?php
require_once 'config.php';
	$tbl="";
	$sql="SELECT tanar.nev,tanar.telefon,tanar.email,tantargy.tantargynev FROM `tanar` inner join tantargy on tantargy.tantargy_id=tanar.tantargy_id order by nev";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
    	$tbl.="<li>{$row['nev']}-{$row['telefon']}-{$row['email']}-{$row['tantargynev']}</li>";           
	}
	
?>

<div class="row shadow bg-light">
	  <div class="col-12">
        <div class="">
            <h1>Tanárok elérhetőségei</h1>
            <ol>
                <?=$tbl?>
            </ol>
        </div>
	  </div>
	</div>