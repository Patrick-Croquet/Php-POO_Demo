<?php
class Voiture {
    const NOMBREAIRBAG = 3;
    public function __construct() {
        echo "Une nouvelle voiture vient d'être fabriquée<br />";
    }
    public function __destruct() { // destructeur
        echo 'Voiture détruite';
    }
    public function demarrage(){
        echo "La voiture de marque";
    }
}
$mavoiture = new Voiture(); // appel de construct

$mavoiture = null; // on détruit la référence : appel de destruct
?>