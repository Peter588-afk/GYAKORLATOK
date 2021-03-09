<?php
    session_start();
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT szerelok.nev as szereloNev,javitasok.datum as javDatum,javitasok.javido as javIdo,javitasok.iranyar as iranyAr,autosok.rendszam as rendSzam FROM javitasok,szerelok,autosok WHERE szerelok.szerelo_id=javitasok.szerelo_id and javitasok.autos_id=autosok.autos_id order by javitasok.datum desc";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract ($row);
            $tbl.="<tr><td></td><td>{$szereloNev}</td><td>{$javDatum}</td><td>{$javIdo}</td><td>{$iranyAr}</td><td>{$rendSzam}</td></tr>";
        }
?>

<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Szerelo Neve</th><th scope="col">Javítás Datuma</th><th scope="col">Javítás Ideje</th><th scope="col">Javítás Irany Ara</th><th scope="col">Rendszam</th></tr></thead>
			   <tbody ><?=$tbl?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>