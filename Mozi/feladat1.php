<?php
    session_start();
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT filmcim,hossz FROM `film` WHERE szarmazas like'magyar'";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract ($row);
            $tbl.="<tr><td></td><td>{$filmcim}</td><td>{$hossz}</td></tr>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Film Címe</th><th scope="col">Hossza</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>