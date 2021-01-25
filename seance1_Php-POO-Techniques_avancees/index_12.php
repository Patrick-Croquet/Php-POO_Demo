<?php 
            include("interfaces10/Animal.interface");   
            include("classes10/Chat.class"); 

            $chat= new Chat();
            
            $chat->setNom("Belle");    
            $chat->setDescription("Douce","Blanche","3.250");
    
            echo "Description de ". $chat->getNom() ." :<br />" . 
            $chat->getDescription();
?>