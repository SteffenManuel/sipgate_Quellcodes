<?php
/*	Aufgabe: Der Tank konnte nur gefüllt, aber nicht geleert werden. Die Aufgabe war, eine Funktion
zu erstellen, mit welcher man den Tank leeren kann. 

*/

//****** OBJECT CLASS

class Tank {
	private $level;
	private $lvlMax;									//Variablen, auf die nur die Klasse Zugriff hat.
	private $lvlMin = 0;
	
	public function __construct ($l,$m){				//Übergabe von Werten erstellter Objekte.
	$this->level = $l;
	$this->lvlMax = $m;
	}
	
	public function addLevel ($in){						//Funktion zum erhöhen des Level eines Objekts.
		if ($this->lvlMax - $this->level > $in){
			$this->level = $this->level + $in;
		}
		else{
			$this->level = $this->lvlMax;
		}
	}
	
	public function reduceLevel ($out){					//Funktion zum reduzieren des Level eines Objekts
		if ($this->level <= $out){
			$this->level = $this->lvlMin;
		}
		else{
			$this->level = $this->level - $out;
		}
	}
	
	public function getLevel(){							//Abrufen des aktuellen Level.
		return $this->level;
	}
}

//****** MAIN PROGRAM

$t1 = new Tank(70,100);									//Erstellung von Objekten mit zwei Werten.
$t2 = new Tank(50,100);
$t3 = new Tank(10,100);
$t4 = new Tank(100,175);

$t1->addLevel(22);

echo $t1->getLevel()."<br>";
echo $t4->getLevel()."<br>";

$t4->addLevel(87);
echo $t4->getLevel()."<br>";

$t4->reduceLevel(174);
echo $t4->getLevel();
?>