<?php
    spl_autoload_register(function($classe){
        include "classes13/" .$classe . ".class";
    });

    $chat = new Animal("Belle");
    $copie = clone $chat;

    echo $chat->getNom() . "<br />";
    echo $copie->getNom(). "<br />";

    $copie->setNom("Gribouille");
    echo $copie->getNom()."<br />";
    echo $chat->getNom();
?>   