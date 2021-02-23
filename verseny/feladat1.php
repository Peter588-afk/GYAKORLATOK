<?php
    session_start();
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT count(fid) as darab, year(now())-szulev as eletkor FROM `futo` group by eletkor";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract ($row);
            $tbl.="<tr><td></td><td>{$darab}</td><td>{$eletkor}</td></tr>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Darabszám</th><th scope="col">Életkor</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>