<?php
    function i($arr,$n){
        $c = 0;
        $r = 0;
        for($j = 0; $j < $n; $j++){
            if($arr[$j] == 0){
                $c = 0;
            }
            else{
            $c++;
            $r = max($r,$c);
        }
        }
        echo $c;
    }

    $arr = [1,1,0,1,1,1];
    $n = 4;
    echo i($arr, $n);

?>