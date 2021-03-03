<?php
        require_once 'config.php';
        $tbl="";
        $tbl2="";
        $sql="SELECT vnev,vid from versenyek ";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $tbl.="<option value='{$vid}'>{$vnev}</option>";
        }
        if(isset($_POST["mentes"])){
            $sql="";
            extract($_POST);
            $sql="SELECT futo.fnev FROM futo,eredmenyek,versenyek WHERE futo.fid=eredmenyek.fid and eredmenyek.vid=versenyek.vid and versenyek.vid={$selectedVid} order by ido limit 10 ";
            $stmt=$db->query($sql);
            while($row=$stmt->fetch()){
                extract ($row);
                $tbl2.="<tr><td></td><td>{$fnev}</td></tr>";
            }
        }
?>

<form action="" method="Post">
        <select name="selectedVid" id="">
            <?=$tbl?>
        </select>
        <input type="submit" value="submit" name="mentes">
</form>
<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
			   <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Legjobbak neve</th></tr></thead>
			   <tbody ><?=$tbl2?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>