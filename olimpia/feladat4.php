<?php
        require_once 'config.php';
        $tbl="";
        $tbl2="";
        $sql="SELECT versenyzo.nev as vnev,versenyzo.az as vaz from versenyzo order by vnev";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $tbl.="<option value='{$vaz}'>{$vnev}</option>";
        }
        if(isset($_POST["mentes"])){
            $sql="";
            extract($_POST);
            $sql="SELECT versenyszam.nev, eredmeny.ev, eredmeny.helyezes, versenyzo.nev as vnev FROM versenyszam,eredmeny,versenyzo WHERE versenyszam.az=eredmeny.versenyszamaz and eredmeny.versenyzoaz=versenyzo.az and eredmeny.versenyzoaz={$selectedMid} and eredmeny.helyezes <=3";
            $stmt=$db->query($sql);
            while($row=$stmt->fetch()){
                extract ($row);
                $tbl2.="<tr><td></td><td>{$nev}</td><td>{$ev}</td><td>{$helyezes}</td></tr>";
            }
        }
?>

<form action="" method="Post">
        <select name="selectedMid" id="">
            <?=$tbl?>
        </select>
        <input type="submit" value="submit" name="mentes">
</form>
<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
               <caption><?=$vnev?></caption>
           <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Versenyszám neve</th><th scope="col">Olimpia éve</th><th scope="col">helyezése</th></tr></thead>
			   <tbody ><?=$tbl2?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>