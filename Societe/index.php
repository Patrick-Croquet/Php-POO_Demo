<?php
    include("interfaces/Humain.interface");
    include("classes/Moi.class");
    
    $patrick = new Moi();
    $patrick->setAdresse("2, rue des Cerisiers","75014","Paris");
    
    echo "Adresse : <br />" . $patrick->getAdresse();
?>