<?php
require_once 'Bicycle.php';
require_once 'car.php';


$bus = new car("bleu",10,"elec");

var_dump($bus);
var_dump($bus->forward());
var_dump($bus);
var_dump($bus->brake());
var_dump($bus);


