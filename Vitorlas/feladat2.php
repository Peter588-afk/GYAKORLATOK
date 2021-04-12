<?php
        require_once 'config.php';
        $tbl="";
        $tbl2="";
        $hajonev="";
        $sql="SELECT nev,id from hajo ";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $tbl.="<option value='{$id}'>{$nev}</option>";
        }
        if(isset($_POST["mentes"])){
            $sql="";
            extract($_POST);
            $sql="SELECT sum(tura.nap*hajo.dij) as bevetel, hajo.nev as hajonev FROM tura, hajo WHERE hajo.id=tura.hajo_id and hajo.id={$selectedId}";
            $stmt=$db->query($sql);
            while($row=$stmt->fetch()){
                extract ($row);
                $tbl2.="<tr><td></td><td>{$bevetel}</td></tr>";
            }
        }
?>

<form action="" method="Post">
        <select name="selectedId" id="">
            <?=$tbl?>
        </select>
        <input type="submit" value="submit" name="mentes">
</form>
<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
               <caption><?=$hajonev?></caption>
           <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Bevetel</th></tr></thead>
			   <tbody ><?=$tbl2?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>