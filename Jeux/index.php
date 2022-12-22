<?php
    include("classes/Joueur.class");
    include("classes/Occasionnel.class");
    $joueur1 = new Joueur("Thomas");
    echo $joueur1->getScore();

    $joueur2 = new Occasionnel("Alexis");
    $joueur1->testTypeObjet($joueur2);

    $joueur3 = new Occasionnel("Patrick");
    $joueur1->testTypeObjet($joueur3);
    echo $joueur1->getScore();    

    $infos = array(25,"homme", "fr");
    $joueur2->testTypeTableau($infos);
?>