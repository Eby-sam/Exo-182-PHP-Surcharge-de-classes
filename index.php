<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Eby");

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("Ignir");

$princesse = new Princesse();
$princesse->setNom("tsunade");
echo $princesse->getNom()."<br>";
echo "x : ".$princesse->getX()."<br>";
echo "y : ".$princesse->getY()."<br>";

echo "<br><br>";

$sorcier = new Sorcier();
$sorcier->setNom("mei");
echo $sorcier->getNom()."<br>";
echo "x : ".$sorcier->getX()."<br>";
echo "y : ".$sorcier->getY()."<br>";




