<?php
        require_once 'config.php';
        $tbl="";
        $tbl2="";
        $sql="SELECT tipusnev,tipus_id FROM tipusok";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $tbl.="<option value='{$tipus_id}'>{$tipusnev}</option>";
        }
        if(isset($_POST["mentes"])){
            $sql="";
            extract($_POST);
            $sql="SELECT autosok.nev as anev, autosok.rendszam as rendszam, tipusok.tipusnev FROM autosok,tipusok WHERE autosok.tipuskod=tipusok.tipus_id and tipusok.tipus_id={$tipusId}";
            $stmt=$db->query($sql);
            while($row=$stmt->fetch()){
                extract ($row);
                $tbl2.="<tr><td></td><td>{$anev}</td><td>{$rendszam}</td></tr>";
            }
        }
?>

<form action="" method="Post">
        <select name="tipusId" id="">
            <?=$tbl?>
        </select>
        <input type="submit" value="submit" name="mentes">
</form>
<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
           <caption><?=$tipusnev?></caption>
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Autos Neve</th><th scope="col">Autos Rendszama</th></tr></thead>
			   <tbody ><?=$tbl2?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>