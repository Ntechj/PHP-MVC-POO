<?php

class mage {

    public $pseudo;
    public $specialisation;
    public $niveau;
    
    public function __construct($nomChoisi, $speChoisi, $niveauChoisi) {

        $this->pseudo = $nomChoisi;
        $this->specialisation = $speChoisi;
        $this->niveau = $niveauChoisi;

    }

};