<?php 
                    include("classes/Animal.class");   
                    include("classes/Chien.class"); 
 
                    $chat = new Animal(); 
                    $chien = new Chien(); 
 
                    $chat->SetNom("Belle"); 
                    $chien->SetNom ("Jump");
                    $chien->setPedigree("Labrador");
                    
                    echo $chat->getNom() . "<br />";
                    echo $chien->getNom(). "  –  "  . $chien->getPedigree() ; 
		?>