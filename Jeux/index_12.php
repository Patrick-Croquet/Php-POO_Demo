<?php
    class Iterateur implements Iterator {
        //On déclare une variable tableau vide 
        private $var = array(); 
        public function __construct($array){ 
            if (is_array($array)){ 
                $this->var = $array; 
            }
        }
        //rewind() replace l’itérateur sur le 1er élément
        public function rewind(){
            echo "Retour au départ <br />"; 
            reset($this->var); 
        }
        //current() retourne l’élément courant
        public function current(){
            $var = current($this->var) ; 
            echo "Elément actuel : " . $var. "<br />"; 
            return $var; 
        }
        //next() se déplace sur l’élément suivant
        public function next(){
            $var = next($this->var) ; 
            echo "Elément suivant : " . $var. "<br />"; 
            return $var; 
        }
        //key() retourne la clé de l’élément courant
        public function key(){
            $var = key($this->var) ; 
            echo "Clé : " . $var. "<br />"; 
            return $var; 
        }


        //valid() vérifie si la position courante est valide
        public function valid(){
            $key = key($this->var);
            $var = ($key !== NULL && $key !== FALSE); 
            echo "Position valide : " . $var. "<br />"; 
            return $var; 
        }
    }

    $tableau = array(1, 2, 3, 4) ;
    $objet = new Iterateur($tableau);

    foreach($objet as $key => $value) {
        print $key. " contient la valeur : " . $value. "<br>"; 
    }
    ?>