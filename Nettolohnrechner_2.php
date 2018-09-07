<html>
<!-- Aufgabe: Der Anwender soll seinen Bruttolohn eingeben, um mit diesen Rechner seinen
Nettolohn ausrechnen zu können. -->
	<head>
		<title>Nettorechner</title>
	</head>

	<body>
	
		<h1>Mein Nettolohnrechner</h1>
		
		<form action="Nettolohnrechner_2.php" method="post">
					<h3> Bruttolohn in Euro: </h3>
					<input name="txtBrutto" type="text" size="10" maxlength="10"> <br>
							<input name="btnSenden" type="submit" value= "senden">
		<!-- Der Anwender gibt hier seinen Bruttolohn ein, welcher über die Method "POST" an den PHP-Teil
			übergeben wird. Damit der Bruttolohn werden kann, drückt der Anwender auf den Button "senden. 
		-->
		</form>
	</body>
</html>		

<?php

//Eingabe
	if(isset($_POST["btnSenden"])){										//Beim Drücken des buttons...
					$bruttolohn = $_POST['txtBrutto'];					// ... wird die Zahl im Eingabefeld als Variable gespeichert. Ein leeres Feld entspricht dem Wert 0.

//Berechnung
// Die Variablen der Versicherungen sind auf den Anteil des Arbeitnehmers angepasst.
	$rentenversicherung						=($bruttolohn / 100 ) * 9.95;
	$arbeitslosenversicherung				=($bruttolohn / 100 ) * 1.4;
	$pflegeversicherung						=($bruttolohn / 100 ) * 0.975;
	$krankenversicherung					=($bruttolohn / 100 ) * 7.45;
	
//Je nach Bruttolohn hat man eine andere Lohnsteuer zu bezahlen.
	if( $bruttolohn <= 3000 ){
		$lohnsteuer = $bruttolohn * 0.2;}
	if( $bruttolohn > 3000 ){
		$lohnsteuer = $bruttolohn * 0.25;}
	if( $bruttolohn > 4000 ){
		$lohnsteuer = $bruttolohn * 0.3;}
	if( $bruttolohn > 5000 ){
		$lohnsteuer = $bruttolohn * 0.35;}
		
//Solidaritätszuschlag und Kirchensteuer richten sich nach der zuvor errechneten Lohnsteuer.
	$soli				= ($lohnsteuer / 100 )* 5.5;
	$kirchensteuer		= ($lohnsteuer / 100 )* 8;
	
//Der Nettolohn wird ausgerechnet und dann ausgegeben. Der Nettolohn wird gerundet mit zwei Stellen nach dem Komma gezeigt.	
	$nettolohn = round($bruttolohn - $rentenversicherung - $arbeitslosenversicherung - $pflegeversicherung- $krankenversicherung
	- $lohnsteuer - $soli - $kirchensteuer, 2);
	echo "Der Nettolohn betraegt $nettolohn Euro.";
		
}
?>		