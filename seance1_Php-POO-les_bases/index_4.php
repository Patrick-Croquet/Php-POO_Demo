<?php
                    include("classes3/Animal.class");
                    include("classes3/Chien.class"); 
 
                    $chien = new Chien("Jump","Brador");

                    echo $chien->getPrenom(). "<br />";
                    echo $chien->getdateVaccination();
        ?>