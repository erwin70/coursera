<?php
// Maakt de vraag.
$vraag = array(
    // Maak een vraag - Eerst de vraag - dan het antwoord - en het goed antwoord
    array("Dit is de eerst vraag", "Ja, dat klopt-Nee, dit klopt niet","Ja, dat klopt"),
    array("Dit is de tweede vraag", "Ja, dat klopt-Nee, dit klopt niet","Ja, dat klopt"),
);

// Kijk of er een vraag gezet is.
if (isset($_GET['vraagnummer'])){
    $vraagNummer = $_GET['vraagnummer'];
}else{
    $vraagNummer = 0;
}

// Lees de vraag uit
echo '<h1>'.$vraag[$vraagNummer][0].'</h1>';

$antwoord = explode('-', $vraag[$vraagNummer][1]);
foreach($antwoord AS $antwoordLus){
    echo $antwoordLus.'<br />';
}
?>
