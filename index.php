<?php

// La Base 

require_once 'bicycle.php';

$bike = new Bicycle('Red');


// First Step
$bike->getcurrentSpeed = 20;


// Second Step

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('Bleu');
$rockrider->dump();

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('green');
$tornado->dump();

echo '---------------------------------------------------------------------------------------------';


require_once 'car.php';



$car = new Car('Yellow', 'Electrique', 3);
$car->dump();

$car = new Car('Purple', 'SP95-E10', 6);
$car->dump();

// First Step
$car->getcurrentSpeed = 50;

// Moving car
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getcurrentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getcurrentSpeed . ' km/h' . '<br>';
echo $car->brake();