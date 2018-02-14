<?php
function validate($arr){
    $err = [];
    foreach($arr as $key => $value){
            if(!$_POST[$key]){
                $err[] = $value;
            } 
    }
    return $err;
}