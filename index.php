<?php

class Personnage{
    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    // class = commence par une majuscule
    // attributs private = commence par un _

    public function speak(){
        echo "Hello !";
    }

    public function damage(){
        
    }

    public function winXp(){

    }
}

$perso = new Personnage; // Création d'un objet avec la classe Personnage
$perso->speak();
?>