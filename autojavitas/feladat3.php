<?php
    session_start();
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT szerelok.nev as sznev,sum(javitasok.javido) as osszido FROM szerelok,javitasok WHERE szerelok.szerelo_id=javitasok.szerelo_id GROUP BY szerelok.nev ORDER BY osszido";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract ($row);
            $tbl.="<tr><td></td><td>{$sznev}</td><td>{$osszido}</td></tr>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Szerelo nev</th><th scope="col">ido</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>