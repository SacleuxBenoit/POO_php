<?php

class Personnage{
    private $_force;
    private $_localisation;
    private $_experience = 1;
    private $_degats;

    // class = commence par une majuscule
    // attributs private = commence par un _

    public function speak(){
        echo "Hello !";
    }

    public function displayExp(){
        echo $this->_experience;
    }

    public function winXp(){
        $this->_experience = $this->_experience +1;
    }
}

$perso = new Personnage; // Création d'un objet avec la classe Personnage
$perso->speak();
$perso->winXp();
$perso->displayExp();
?>