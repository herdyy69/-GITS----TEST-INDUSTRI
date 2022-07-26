<?php 

    function test($a){
    $reversed = array_reverse($a);
        foreach($reversed as $b){
            echo $b;
        }
    }
    $a = ["H","E","L","L","O"];
    test($a);
?>