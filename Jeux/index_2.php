<?php
    include("classes1/Joueur.class");
    include("classes1/Ia.class");
    
    $joueur = new Joueur("Thomas");         	
    $monstre = new IA("Le loup") ; 
                
    $joueur->enAvant()->enAvant();
    $monstre->enAvant();
?>