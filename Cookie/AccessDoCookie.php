<?php
if(!isset($_COOKIE['visited']))
{
    setcookie("visited" , "yes");
    $str = "cookie o nazwie visited nie jest ustawione.";
}
else
{
    $str = "cookie o nazwie visited jest ustawione.";
    $str .= "jego wartość to: {$_COOKIE['visited']}.";
}
?>

<!DOCTYPE html> 
<html>
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="width-device-width, instal-scale= 1.0"> 
<title>
    <>
