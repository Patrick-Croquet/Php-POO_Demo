<?php  
                    include("classes7/Animal.class");   
                    include("classes7/Chien.class"); 
 
                    $chat = new Animal("Belle");
                    $chien = new Chien("Jump");

                    $chien->setPedigree("Labrador");

                    echo "<p>".
                    "Nom : " .$chat->getNom() . "<br />".
                    "vacciné le : " .  $chat->getdateVaccination(). "<br />". 
                    $chat->getVaccin(1). "</p>".
                    "<p>".
                    "Nom : " .$chien->getNom() . "<br />".
                    "vacciné le : " .  $chien->getdateVaccination(). "<br />". 
                    $chien->getVaccin(2). "<br />".
                    "Pédigrée :" . $chien->getPedigree(). "</p>";
		?>