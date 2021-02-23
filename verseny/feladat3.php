<?php
    session_start();
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT fnev,ido FROM `futo` inner join eredmenyek on futo.fid=eredmenyek.fid order by ido";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract ($row);
            $tbl.="<tr><td></td><td>{$fnev}</td><td>{$ido}</td></tr>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">fnev</th><th scope="col">ido</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>