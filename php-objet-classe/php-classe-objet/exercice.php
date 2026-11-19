<?php

require __DIR__ . '/../php-mvc/models.php';

class Mage {

    public $nom ;
    public $niveau ;


    public function lancerSort($sorts) {

        echo $sorts;

    }

}

$djiko = new Mage();
$kael = new Mage();

    $djiko->nom = "Djiko";
    $kael->nom = "Kael";
    $djiko->niveau = 60;
    $kael->niveau = 45;   

    echo $djiko->nom .' '. "Niveau" . ' ' . $djiko->niveau;
    echo "<br>";
    echo $kael->nom .' '. "Niveau" . ' ' . $kael->niveau;
    echo "<br>";
    $djiko->lancerSort($sorts['feu']);
    echo "<br>";
    $kael->lancerSort($sorts['soin']);