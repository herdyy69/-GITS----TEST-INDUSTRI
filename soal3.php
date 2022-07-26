<?php
function bracket($data){
    $data = str_split($data);
    $datax = array();

    if($data == "{"){
        if($data == "}" ){
        }
        echo "yes";
    }
    elseif($data == "["){
        if($data == "]" ){
        }
        echo "yes";
    }
    elseif($data == "("){
        if($data == ")" ){
        }
        echo "yes";
    }
}

$data = "{}";
bracket($data);


?>