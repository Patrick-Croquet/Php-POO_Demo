<?php
                    include("classes3/Animal.class");
                    include("classes3/Chien.class"); 
 
                    $chien = new Chien("Jump");

                    echo $chien->getNom(). "<br />";
                    echo $chien->getdateVaccination();
        ?>