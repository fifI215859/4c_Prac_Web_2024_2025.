<?php 

$year = 2000;
if($year >=1582 
        && $year % 4 == 0
        && $year % 100 != 0
        || $year % 400 == 0)
        echo "29 dni <br>";
    else
        echo "28 dni <br>";
?>