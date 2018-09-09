<?php
/* Aufgabe: Das Programm soll die Variablen überprüfen, ob ein gültiges Datum raus kommt.
Diese Aufgabe gibt es in drei Schwierigkeiten: 
Schwierigkeit 1: Jeder Monat hat 30 Tage (Bankjahr - 360 Tage)
Schwierigkeit 2: Gregorianischer Kalender, ohne Schaltjahr.
Schwierigkeit 3: Gregorianischer Kalender, mit Schaltjahr.
*/

//Variablen zur festlegung des zu prüfenden Datum:
	$tag = 29;
	$monat = 2;
	$jahr = 2016;
	
	/*if ($tag > 30)
		$datumOK=0;
	else if ($monat > 12)
		$datumOK = 0;
	else
		$datumOK = 1;*/

	if ($monat == 1)
		if ($tag > 31 || $tag < 1 )
			$datumOK = 0;
		else
			$datumOK = 1;
	else
		
	if ($monat == 2)
		if ($jahr%4==0)						//hier wird geprüft, ob das eingegebene Jahr ein Schaltjahr ist.
			if ($tag > 29 || $tag < 1)
				$datumOK = 0;
			else
				$datumOK = 1;
		else
			if ($tag > 28 || $tag < 1)
				$datumOK = 0;
			else
				$datumOK = 1;
	else			
	if ($monat == 3)
		if ($tag > 31 || $tag < 1)
			$datumOK = 0;
		else
			$datumOK = 1;
	else
	if ($monat == 4)
		if ($tag > 31 || $tag < 1)
			$datumOK = 0;
		else
			$datumOK = 1;
	else
	if ($monat == 5)
		if ($tag > 30 || $tag <1)
			$datumOK = 0;
		else
			$datumOK = 1;
	else
	if ($monat == 6)
		if ($tag > 31 || $tag < 1)
			$datumOK = 0;
		else
			$datumOK = 1;
	else
	if ($monat == 7)
		if ($tag > 30 || $tag < 1)
			$datumOK = 0;
		else
			$datumOK = 1;
	else
	if ($monat == 8)
		if ($tag > 31 || $tag < 1)
			$datumOK = 0;
		else
			$datumOK = 1;
	else
	if ($monat == 9)
		if ($tag > 31 || $tag < 1)
			$datumOK = 0;
		else
			$datumOK = 1;
	else
	if ($monat == 10)
		if ($tag > 30 || $tag < 1)
			$datumOK = 0;
		else
			$datumOK = 1;
	else
	if ($monat == 11)
		if ($tag > 30 || $tag < 1)
			$datumOK = 0;
		else
			$datumOK = 1;
	else
	if ($monat == 12)
		if ($tag > 31 || $tag < 1)
			$datumOK = 0;
		else
			$datumOK = 1;

	
	
			
	if ($datumOK  == 1)
		echo "Es ist der $tag.$monat.$jahr. ";
	else
		echo "Fehler beim Datum."
	
	
	
?>
