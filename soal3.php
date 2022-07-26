<?php
function soal($a,$b,$c,$d,$e,$f) {
    if($a == '{' && $b == '[' && $c == '(' && $d == ')' && $e == ']' && $f == '}') {
        echo 'YES';
    }else{
        echo 'NO';
    }
}
echo soal("{","[","(",")","]","}");
?>