<?php
$price = 14;
$categ = 1;

switch($categ)
{
    case 1;
        echo ("pieczywo".$price * 64);
        break;
    case 2;
        echo ("elektronika".$price * 32);
        break; 
    case 2;
        echo ("odzież".$price * 0.64);
        break;
}
?>