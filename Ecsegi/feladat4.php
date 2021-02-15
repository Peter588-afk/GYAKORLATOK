<?php
        require_once 'config.php';
        
        $tbl="";
        $sql="SELECT nev from csucs ";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $tbl.="<option value='{$nev}'>{$nev}</option>";
        }
?>

<form action="" method="Post">
        <select name="" id="">
            <?=$tbl?>
        </select>
</form>