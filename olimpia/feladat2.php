<?php
        require_once 'config.php';
        $tbl="";
        $tbl2="";
        $sql="SELECT orszag,eredmeny.az as oaz FROM `eredmeny`";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $tbl.="<option value='{$oaz}'>{$orszag}</option>";
        }
        if(isset($_POST["mentes"])){
            $sql="";
            extract($_POST);
            $sql="SELECT versenyzo.nev,eredmeny.ev,eredmeny.orszag FROM eredmeny,versenyzo WHERE eredmeny.versenyzoaz=versenyzo.az and eredmeny.az={$selectedOid}";
            $stmt=$db->query($sql);
            while($row=$stmt->fetch()){
                extract ($row);
                $tbl2.="<tr><td></td><td>{$nev}</td><td>{$ev}</td></tr>";
            }
        }
?>

<form action="" method="Post">
        <select name="selectedOid" id="">
            <?=$tbl?>
        </select>
        <input type="submit" value="submit" name="mentes">
</form>
<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
               <caption><?=$orszag?></caption>
           <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Versenyző neve</th><th scope="col">Olimpia éve</th></tr></thead>
			   <tbody ><?=$tbl2?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>



