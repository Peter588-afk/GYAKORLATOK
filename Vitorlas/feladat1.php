<?php
    session_start();
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT nev, round(dij/utas,0) as 'napdij' FROM hajo";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract ($row);
            $tbl.="<tr><td></td><td>{$nev}</td><td>{$napdij}</td></tr>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Hajó Neve</th><th scope="col">Egy főre jutó napi bérletidíj</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>