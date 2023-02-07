<?php

function dump($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
$mots = ["moto", "voiture", 'bus'];
$phrases = [];


$variables = strtolower($_POST['texte']);

$bouttons = explode(" ", $variables);

echo "<br>";
echo "<br>";

?>
<form action="" method="POST">
    <input type="text" name="texte">
    <br>
    <br>
    <button type="submit"> envoie</button>
</form>
<?php
$phrases = $bouttons;
echo "<br>";
foreach ($mots as $mot) {
    $tailleMot = strlen($mot);
    $filtreEtoile = str_repeat("*", $tailleMot);
    $filtre = str_replace($mot, $filtreEtoile, $phrases);
    $phrases = $filtre;
    
}

$phrases = implode(" ", $filtre);

echo "<p>  $phrases </p>";
?>