
<?php
    session_start();
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT fnev, year(now())-szulev as eletkor FROM `futo` WHERE year(now())-szulev<18 order by fnev";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract ($row);
            $tbl.="<tr><td></td><td>{$fnev}</td><td>{$eletkor}</td></tr>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Név</th><th scope="col">Életkor</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>