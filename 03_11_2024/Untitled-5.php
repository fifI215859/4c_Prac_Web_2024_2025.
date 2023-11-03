<?php 
$rating = 76;
if ($rating > 100)
{
    echo "OCena" .$rating ."za duża";
}
else if($rating < 0)
{
    echo "OCena" . $rating ."za mała";
}

if ($rating / 100 < 30 && $rating / 100 > 1){
    echo "OCena: 1 ";
}
else if($rating / 100 > 0.30 && $rating / 100 < 0.50) {
    echo "Ocena: 2";
}
else if($rating / 100 > 0.50 && $rating / 100 < 0.60) {
    echo "Ocena: 3";
}
else if($rating / 100 > 0.60 && $rating / 100 < 0.75) {
    echo "Ocena: 4";
}
else if($rating / 100 > 0.75 && $rating / 100 < 0.90) {
    echo "Ocena: 5";
}
else if($rating / 100 > 0.90 && $rating / 100 < 1.01) {
    echo "Ocena: 5";
}
?> 