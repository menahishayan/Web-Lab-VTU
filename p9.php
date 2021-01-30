<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";
    $words = explode(" ",$states);

    $statesList = array();

    foreach($words as $word) {
        if(preg_match('/xas$/', ($word))) $statesList[0] = $word;
        if(preg_match('/^k.*s$/i', ($word))) $statesList[1] = $word;
        if(preg_match('/^M.*s$/', ($word))) $statesList[2] = $word;
        if(preg_match('/a$/', ($word))) $statesList[3] = $word;
    }

    ksort($statesList);
    
    foreach($statesList as $item => $value) print $value."<br/>";
?>