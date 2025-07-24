<?php

# je sluit altijd af met ;

#getalvariable
$getal1 = 345667;

#tekstvariable de waarde staat altijd tussen "   "
$tekts1= "Erwin";

$var1 = "een zin met tekst die later door de volgende functie alle tekens ook de spaties opteld en dan opgeslagen wordt in andere variable ";
$var2 = strlen($var1);
# als je variabelen koppelt denk dan goed na of je er ook een spatie moet tussenzetten
echo $var1." = ".$var2." tekens.";

echo $tekts1.' zei: "ik begrijp je niet".';

# dit is gewoon info text, ter verduidelijking de functie hieronder is voor het controleren of de php server het doet en welke versie hier gebruikt word.
$resultaat = phpinfo();

?>