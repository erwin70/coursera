<center>
<?php	
	setlocale(LC_ALL, 'nl_NL', 'nld_nld');
	$datum = date('G');
	echo strftime('%A %e %B %Y', $datum );
	echo '. &nbsp';
	
    $tijd = date('G');
	$minuten = date ('i');
	$volledig = date ('r');
	
    if ($tijd <= 6){
        $groet = 'Goedenacht';
    }elseif ($tijd > 6 && $tijd <= 12){
        $groet = 'Goedemorgen';
    }elseif ($tijd > 12 && $tijd <= 18){
        $groet = 'Goedemiddag';
    }elseif ($tijd > 18 && $tijd <= 23){
        $groet = 'Goedeavond';
    }else{
        $groet = 'Welkom';
    }
	echo $groet; echo "&nbsp het is nu &nbsp"; echo $tijd; echo '&nbsp uur &nbsp'; echo $minuten; echo "&nbsp minuten. &nbsp";
	echo $groet; echo "&nbsp het is nu &nbsp"; echo $volledig;	
?>
</center>
<!--
DATE() functie:
Dag
↪ d  Dag in de maand, 01 to 31
↪ D  Dag in de maand, Ma tot Zo (engels)
↪ j  Dag in de maand, 1 to 31 (zonder voorloop nul)
↪ l  Dag in de maand, Maandag tot Zondag (engels)
↪ N  Dag van de week, 1 = Maandag tot 7 = Zondag
↪ w  Dag van de week, 0 = Zondag tot 6 = Zaterdag
↪ z  Dag in het jaar, 1 tot 365

Week
↪ W  Weeknummer

Maand
↪ F  Naam van de maand, lang (engels)
↪ m  Maand nummer, 01 tot 12
↪ M  Naam van de maand, kort (engels)
↪ n  Maand nummer, 1 tot 12 (zonder voorloop nul)
↪ t  Dagen per maand

Jaar
↪ L  Schrikkeljaar of niet, 0 = nee | 1 = ja
↪ Y  Jaar nummer, 2015
↪ y  Jaar nummer, 15

Tijd
↪ a  am of pm
↪ A  AM of PM
↪ g  Tijd van 1 tot 12 (zonder voorloop nul)
↪ G  Tijd van 1 tot 24 (zonder voorloop nul)
↪ h  Tijd van 01 tot 12
↪ H  Tijd van 01 tot 24
↪ i  Minutten
↪ s  Seconden
↪ u  Milli secoden
↪ I  Nacht of Dag

Totale datum
↪ c  2015-02-12T15:19:21+00:00
↪ r  Thu, 21 Dec 2015 16:01:07 +0200 (engels)
-->