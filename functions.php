<?php
function in_array_r($needle, $haystack){
    foreach($haystack as $item) {
        if(in_array($needle,$item,true)){
            return $item;
        }
    }
    return false;
}
?>