<?php
echo "Odpowiedź z PHP: <br>".$_POST['nazw'];
echo $_POST ['im']."<br>";
echo $_POST ['zaw']."<br>";
echo $_POST ['adr']."<br>";
echo "Wykształcenie to:{$_POST['wykszt']}.";

if(!isset ($_POST['wykszt'])){
    echo "Prosze zaznaczyć pole Wykształcenie";
}else {
    echo "WYkształcenie:" . trim($_POST['wykszt']) . <br>;
}

echo "<p>Znajomość języków:</p>";

if(!empty($_POST['języki'])) {
echo "<ul>";
foreach($_POST['języki'] as $wartosc){
    echo "<li>$wartosc</li>";
}
    echo "</ul>"
} else {
    echo "<p>".$_POST['nazw']."nie zna żadnego języka.</p>";
}
?>