<?php
    class Joueur {
        public static function test(){
            return static::getName();
        }
        private static function getName(){
            return "Je suis un joueur";
        }
    }

    class Occasionnel extends Joueur {
        public static function getName() {
            return "Je suis un joueur occasionnel";
        }
    }
    echo Occasionnel::test() ;
?>