<?php
    session_start();
        require_once 'config.php';
        
        $tbl="";
        $sql="select a.szerzo,a.cim,count(b.az) as darabszam from mu a,peldany b where a.az=b.muaz group by a.az order by a.szerzo,a.cim";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){

            $tbl.="<tr><td></td><td>{$row['szerzo']}</td><td>{$row['cim']}</td><td>{$row['darabszam']}</td>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive">
		   <table class="table table-hover table-fixed-border" >
			   <thead><tr><th scope="col"></th><th scope="col">Szerző</th><th scope="col">Cím</th><th scope="col">darabszám</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>