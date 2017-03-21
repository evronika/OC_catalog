<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 07.03.2017
 * Time: 20:49
 */
require_once ('Animal.class.php');

class Dog extends Animal{
    public function talk()
    {
        printf('<p>Собака %s цвета %s сказала ГАВ!</p>', $this->name, $this->color);
    }

}