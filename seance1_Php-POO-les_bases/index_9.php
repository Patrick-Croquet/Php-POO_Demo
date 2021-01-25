<?php  
                    include("classes7/Animal.class");   
                    include("classes7/Chien.class"); 
 
                    $chat = new Animal("Belle");
                    $chien = new Chien("Jump");
                    $perroquet = new Animal("Coco");
                    // $lapin = new Animal("Jimmy");

                    $chien->setPedigree("Labrador");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$chat->getNom() . "<br />".
                    "vacciné le : " .  $chat->getdateVaccination(). "<br />". 
                    $chat->getVaccin(1). "<br /></p>".
                    
                    "<p>".
                    "Nom : " .$chien->getNom() . "<br />".
                    "vacciné le : " .  $chien->getdateVaccination(). "<br />". 
                    $chien->getVaccin(2). "<br />".
                    "Pédigrée : " . $chien->getPedigree(). "</p>".
                    "<p>".
                    "Nom : " .$perroquet->getNom() . "<br />".
                    "vacciné le : " .  $perroquet->getdateVaccination(). "<br />". 
                    $perroquet->getVaccin(1). "<br /></p>".
                    "<p>".
                    // "Nom : " .$lapin->getNom() . "<br />".
                    // "vacciné le : " .  $lapin->getdateVaccination(). "<br />".
                    // $lapin->getVaccin(1). "<br />".  
                    // "<br /></p>".

                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";
		?>