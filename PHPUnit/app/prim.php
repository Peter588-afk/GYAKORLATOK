<?php

function primeCheck($n){
    if($n==1)
        return 0;
    for($i=2;$i<=$n/2;$i++){
        if($n%$i==0)
            return 0;
    }
    return 1;
}
echo primeCheck(11);
?>