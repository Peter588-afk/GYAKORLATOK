<?php
session_start();
require_once 'config.php';

$strOpt='';
$sql="SELECT mu.evfolyam FROM `mu` group by mu.evfolyam order by evfolyam";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $strOpt.="<option value='{$row['evfolyam']}' class='opt'></option>";
}

        
$tbl="";
        if(isset($_POST['mentes']) && $_POST['filter']){
            $szerzo=$_POST['szerzo'];
            $cim=$_POST['cim'];
            $sql="select szerzo,cim from mu order by szerzo,cim";
            echo $sql;
            
            $stmt=$db->query($sql);
            while($row=$stmt->fetch()){
                $tbl.="<tr><td></td><td>{$row['szerzo']}</td><td>{$row['cim']}</td>";
            }
            
        }

?>
<form action="" method="post">
    <div class="container border p-3">
    <div class="row shadow p-1 bg-light">
        <div class="col-md-12">
            <label for="">Évfolyamok:</label>
            <select class="form-select form-select-lg mb-3 text-info">
            <option value="0">Válassz egy évfolyamot</option>
                <?=$strOpt?>
            </select>
            <input type="submit" name="mentes" value="Listazas" class="btn-info">

            <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Szerző</th><th scope="col">Cím</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
        </div>
        </div>
    </div>
</form>