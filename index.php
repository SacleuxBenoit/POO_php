<?php

class Personnage{
    private $_force = 20;
    private $_experience = 0;
    private $_degats = 0;

    // class = commence par une majuscule
    // attributs private = commence par un _

    public function damage($persoToHit){
        $persoToHit->_degats += $this->_force;
    }

    public function winXp(){
        $this->_experience = $this->_experience +1;
    }

}

$firstPerso = new Personnage; // Création d'un objet avec la classe Personnage
$secondPerso = new Personnage;

$firstPerso->damage($secondPerso);
?>