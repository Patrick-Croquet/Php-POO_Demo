<?php
    include("classes4/Joueur.class");
    include("classes4/Abstinent.class");
                
    $joueur = new Abstinent("Steven");
    
    $joueur->hello();
    $joueur->et() ;
    $joueur->bye() ;	
?>