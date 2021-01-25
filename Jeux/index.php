<?php
    include("classes/Joueur.class");
    include("classes/Occasionnel.class");
    $joueur1 = new Joueur("Thomas");
    $joueur2 = new Occasionnel("Alexis");
    $joueur1->testTypeObjet($joueur2);
    echo $joueur1->getScore();
    $infos = array(25,"homme", "fr");
    $joueur2->testTypeTableau($infos);
?>