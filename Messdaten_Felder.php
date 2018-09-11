<?php
/*
Aufgabe1:	Aus dem gegebenen Feld soll der Mittelwert bestimmt werden. 
Außerdem sollen mithilfe einer Funktion alle Einträge, die sich um 1% vom Sollwert unterscheiden, mit Warnung
ausgegeben werden.

Aufgabe2: Aus dem gegebenen Feld soll der höchste Wert bestimmt werden.
*/


function mittelwert($m){							//Funktion zum bestimmen des Mittelwerts
	$summe = 0;
	for ($z=0; $z < count ($m); $z++){
		$summe= $summe + $m[$z];
	}
	return $summe/count ($m);							//Die Summe der addierten Werte aus dem Feld soll durch die Anzahl der Einträge im Feld geteilt werden.
}


function warnung($g){									//Funktion zum ausgeben von Warnungen, 
	$sollwert = 5;
	for ($j=0; $j<count($g); $j++){
		if ($g[$j] <= $sollwert/1.01 || $g[$j]>= $sollwert*1.01){				//Kleiner oder gleich 4,95 - größer oder gleich 5,05
			echo "Warnung! Der Wert $g[$j] entspricht nicht dem Sollwert! <br>";
		}
	}
}

function maxWert ($f){									//Funktion zum finden des höchsten Werts. 
	$wertMax= 0;										//In dieser Variable soll der Maximalwert gespeichert werden.
	for ($i=0; $i < count ($f); $i++){
		if ($wertMax < $f[$i]){
			$wertMax = $f[$i];
		}
	}
	return $wertMax;
}

//***************

$feld1= array(4.92,4.98,4.97,5.01,5.02,5.01,5.03,4.95,4.96,5.04,5.08,5.02,4.99);

$mittelwert = round(mittelwert($feld1),2);
$maxi = maxWert($feld1);

echo $mittelwert."<br>";
echo $maxi."<br>";

warnung($feld1);

?>