<?php
class Tests extends \PHPUnit\Framework\TestCase{

    function testInputTypeChecked(){
        include "app\prim.php";
        $n=10;
        $this->assertEquals(primeCheck($n),0);
    }
}
?>