<?php 
            include("classes9/Animal.class");   
            include("classes9/Chien.class");
            // include("classes9/Chat.class");  

            $chien = new Chien("Jump");
            // $chat = new Chat("Belle");

            $chien->setAdresse("2, rue des Cerisiers","75014","Paris");
            echo "Adresse :<br />" . $chien->getAdresse();
?>