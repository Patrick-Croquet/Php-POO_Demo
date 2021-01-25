<?php
                    include("classes3/Animal.class");   
                    include("classes3/Chien.class"); 
 
                    $chat = new Animal("Belle");
                    $chien = new Chien("Jump");

                    $chien->setPedigree("Labrador");

                    echo $chat->getNom() . "<br />";
                    echo $chat->getdateVaccination(). "<br />";

                    echo $chien->getNom(). "<br />";
                    echo $chien->getdateVaccination(). "<br />";
                    echo $chien->getPedigree(). "<br />";
		?>