<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 07.03.2017
 * Time: 20:51
 */

require_once ('Animal.class.php');
require_once ('Dog.class.php');
require_once ('Cat.class.php');
$animals = [];
$animals[] = new Dog('Bobik', 'white');
$animals[] = new Cat('Murkot', 'red');
$animals[0]->setColor('black');
$animals[1]->setColor('yellow');
foreach ($animals as $animal){
    $animal->talk();
}

Animal::manuallyIncreasePopulation();
echo Animal::$counter;