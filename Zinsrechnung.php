<?php
/* Aufgabe: Man hat ein Kapital, welches bezinst wird. Wie lange dauert es,
bis das Kapital sich verdoppelt hat? Wie hoch ist das Kapital nach zehn jahren?
*/

$kapital = 5000;
$zinssatz = 1.02;
$kapitalNeu1 = $kapital;
$kapitalNeu2 = $kapital;
$j=0;

while ($kapitalNeu1 < $kapital*2){			//Berechnung des Kapitals bis es sich verdoppelt hat.
	$kapitalNeu1 = $kapitalNeu1*$zinssatz;
	$j++;
}

for ($t=0; $t<=9; $t++){					//Berechnung des Kapitals für zehn Jahre
	$kapitalNeu2= $kapitalNeu2*$zinssatz;
}

echo $j;
echo "<br>".$kapitalNeu2;
?>