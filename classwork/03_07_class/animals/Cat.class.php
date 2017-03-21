<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 07.03.2017
 * Time: 20:49
 */
require_once ('Animal.class.php');

class Cat extends Animal{
    public function talk()
    {
        printf('<p>Кот %s цвета %s сказал МЯУ!</p>', $this->name, $this->color);
    }

}