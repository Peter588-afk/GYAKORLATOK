<?php
        require_once 'config.php';
        $tbl="";
        $tbl2="";
        $sql="SELECT mozinev,mid from mozi ";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $tbl.="<option value='{$mid}'>{$mozinev}</option>";
        }
        if(isset($_POST["mentes"])){
            $sql="";
            extract($_POST);
            $sql="SELECT film.filmcim,film.szarmazas,film.mufaj,mozi.mozinev FROM film,mozi,hely WHERE mozi.mid=hely.mid and hely.fid=film.fid and mozi.mid={$selectedMid}";
            $stmt=$db->query($sql);
            while($row=$stmt->fetch()){
                extract ($row);
                $tbl2.="<tr><td></td><td>{$filmcim}</td><td>{$szarmazas}</td><td>{$mufaj}</td></tr>";
            }
        }
?>

<form action="" method="Post">
        <select name="selectedMid" id="">
            <?=$tbl?>
        </select>
        <input type="submit" value="submit" name="mentes">
</form>
<div class="container border p-3">
<div class="row shadow p-1 bg-light">
	  <div class="col-md-12">
		 <div class="table-responsive ">
		   <table class="table table-hover table-fixed-border thead-dark" >
               <caption><?=$mozinev?></caption>
           <thead class="thead-dark"><tr><th scope="col"></th><th scope="col">Film Címe</th><th scope="col">Szarmazasa</th><th scope="col">Mufaja</th></tr></thead>
			   <tbody ><?=$tbl2?></tbody>
		  </table>
		</div>
	  </div>
	</div>
</div>