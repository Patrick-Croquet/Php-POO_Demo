<?php
    include("classes3/Joueur.class");
    include("classes3/Occasionnel.class");
    
    $joueur = new Occasionnel("Alexis");
    
    $joueur->hello();
    $joueur->bye() ;		
?>