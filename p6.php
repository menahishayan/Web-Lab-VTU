<?php
    $f = fopen("count.txt","r");
    $count = fscanf($f,"%d"); 
    $count[0]++; 
    print "Views: ".$count[0];
    fclose($f); 
    
    $f = fopen("count.txt","w");
    fprintf($f,"%d",$count[0]); 
?>