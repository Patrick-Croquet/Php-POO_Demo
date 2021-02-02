<?php
                    include("classes3/Animal.class");   
                    include("classes3/Chien.class"); 
 
                    $chat = new Animal("Belle","Lechat");
                    $chien = new Chien("Jump","LeChien");

                    $chien->setPedigree("Labrador");

                    echo $chat->getPrenom(). " " .$chat->getNom() . "<br />";
                    echo $chat->getdateVaccination(). "<br />";

                    echo $chien->getPrenom().  " " .$chien->getNom(). "<br />";
                    echo $chien->getdateVaccination(). "<br />";
                    echo $chien->getPedigree(). "<br />";
		?>