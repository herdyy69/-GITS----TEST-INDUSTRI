<?php
    function i($arr){
        $c = 0;
        $r = 0;
       
        foreach($arr as $item){
            if($item == 1){
               return $c += 1;
            }
            $r = $arr < $c && $arr = $c;
            if($c == 0 && $item == 0){
               return $c = 0;
            }
        }
    }

    $arr = [1,0,0,1,0,1,1];
    echo i($arr);

?>