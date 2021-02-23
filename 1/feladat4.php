<?php
        require_once 'config.php';
        
        if(isset($_POST["mentes"]) && $_POST["select"]!=0){
            $sql="";
        }

        $tbl="";
        $sql="SELECT nev from csucs ";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $tbl.="<option value='{$nev}'>{$nev}</option>";
        }

?>

<form action="" method="Post">
        <select name="select" id="">
            <?=$tbl?>
        </select>
        <input type="submit" value="submit" name="mentes">
</form>