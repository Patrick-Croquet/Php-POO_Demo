<?php
    class Parcourir {
        public $var1 = "valeur 1"; 
        public $var2 = "valeur 2"; 
        public $var3 = "valeur 3";
        private $var4 = "valeur 4";  

        protected $protected = "valeur protégée"; 
        private $private = "valeur privée";
    }

    $objet = new Parcourir();

    Foreach($objet as $key => $value) {
        print $key. " contient la valeur : " . $value. "<br>";
    }
?>



