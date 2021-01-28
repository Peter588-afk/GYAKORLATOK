<?php
class TestDB extends \PHPUnit\Framework\TestCase{
    
    function testConfigDB(){
        include "app/config.php";
        $this->assertEquals(is_object($db),true);
    }
    function testProductClass(){
        include "app/config.php";
        include "app/product.class.php";
        $obj=new Product($db);
        $this->assertEquals(is_object($obj),true);
        //van e id az objektumban
        $this->assertObjectHasAttribute("id",$obj);
        //van e read metodus
        $this->assertEquals(method_exists($obj,"read"),true);
        //van e adat az adatbazisba
        $rowNumber=$obj->read()->rowCount();
        $van=$rowNumber>0?true:false;
        $this->assertEquals($van,true);
    }
}
?>