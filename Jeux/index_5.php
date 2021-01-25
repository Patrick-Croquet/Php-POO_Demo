<?php
    include("classes5/Joueur.class");
    include("classes5/Gourmand.class");
    
    $joueur = new Gourmand ("Alexandre");
    
    $joueur->hello();
    $joueur->et() ;
    $joueur->bye() ;
    $joueur->et() ;
    $joueur->aBientot() ;			
?>