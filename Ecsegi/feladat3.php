<?php
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT nev,edatum FROM `csucs` WHERE mazon=0 ";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){

            $tbl.="<tr><td></td><td>{$row['nev']}</td><td>{$row['edatum']}</td>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">nev</th><th scope="col">Dátum</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>