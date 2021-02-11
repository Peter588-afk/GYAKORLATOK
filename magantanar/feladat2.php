<?php
require_once 'config.php';
	$tbl="";
	$sql="SELECT tanitvany.nev,tanitvany.telefon,tanitvany.email FROM tanitvany order by tanitvany.nev";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
    	$tbl.="<li>{$row['nev']}-{$row['telefon']}-{$row['email']}</li>";           
	}
	
?>

<div class="row shadow bg-light">
	  <div class="col-12">
        <div class="">
            <h1>Diákok elérhetőségei</h1>
            <ol>
                <?=$tbl?>
            </ol>
        </div>
	  </div>
	</div>