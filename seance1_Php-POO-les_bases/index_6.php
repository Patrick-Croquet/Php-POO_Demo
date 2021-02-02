<?php
                    include("classes3/Animal.class");   
                    include("classes3/Chien.class"); 
 
                    $chat = new Animal("Belle","Lechat");
                    $chien = new Chien("Jump","LeChien");

                    $chien->setPedigree("Labrador");

                    echo "<p>".
                    "Nom : " .$chat->getNom() . "<br />".
                    "vacciné le : " .  $chat->getdateVaccination(). "</p>".
                    "<p>".
                    "Nom : " .$chien->getNom() . "<br />".
                    "vacciné le : " .  $chien->getdateVaccination(). "<br />".
                    "Pédigrée :" . $chien->getPedigree(). "</p>";
		?>