<?php
    session_start();
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT * FROM `film` order by hossz desc limit 10";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract ($row);
            $tbl.="<tr><td></td><td>{$fid}</td><td>{$filmcim}</td><td>{$szarmazas}</td><td>{$mufaj}</td><td>{$hossz}</td></tr>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Film Id</th><th scope="col">Film Címe</th><th scope="col">Szarmazasa</th><th scope="col">Mufaja</th><th scope="col">Hossza</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>