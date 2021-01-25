<?php
    spl_autoload_register(function($classe){
    include "classes8/" .$classe . ".class";
    });

    $joueur1 = new Joueur("Thomas");
    $joueur2 = new Occasionnel("Alexis");

    echo $joueur1->getNom() . " <br />";
    echo $joueur2->getNom(); 			
?>