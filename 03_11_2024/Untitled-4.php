<?php
$year = 1274;

if(($year % 4 == 0 && $year % 100  != 0) || $year % 400== 0){
    echo"Rok" . $year ."jest przestepny";
}else{
    echo"Rok". $yrea ."nie jest przestepny.";
}
$Century = ceil($year / 100);
echo"stulecie". $Century;
?>