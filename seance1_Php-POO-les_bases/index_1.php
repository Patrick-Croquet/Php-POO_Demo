<?php
                    include("classes/Animal.class");
                    $chien = new Animal();

                    $chien->setNom("Jump");
                    echo  $chien->getNom();
?>