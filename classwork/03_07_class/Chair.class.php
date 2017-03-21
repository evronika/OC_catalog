<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 07.03.2017
 * Time: 19:44
 */
require_once ('Product.class.php');

class Chair extends Product{
    public $amount;
    public function __construct($name, $color, $vote, $height, $amount){
        parent::__construct($price, $color, $width, $height);
        $this->amount = $amount;
    }
}
