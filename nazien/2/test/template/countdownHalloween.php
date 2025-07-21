<?php
function countdown  ($naam, $dag, $maand, $jaar) {
	$aantalDagen = mktime(0,0,0, $maand, $dag, $jaar) -time();
	$deelFactor = 86400;
	
	$antwoord = ceil($aantalDagen / $deelFactor);
	
	if ($antwoord > 0) {
		echo 'Het is nog '.$antwoord.' dagen tot '.$naam;
		}elseif ($antwoord == 0) {
		echo 'Het is vandaag '.$naam;
		}
		}
		echo countdown ('Helloween', 31, 10, 2020);
		
?> 