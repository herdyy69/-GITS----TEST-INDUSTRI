<?php
    function i($arr){
        $sementara = 0;
        $r = 0;
       
        foreach($arr as $item){
            if($item == 1){
               return $sementara += 1;
            }
            $r = $arr < $sementara && $arr = $sementara;
            if($sementara == 0 && $item == 0){
               return $sementara = 0;
            }
        }
    }

    $arr = [1,0,0,1,0,1,1];
    echo i($arr);

?>