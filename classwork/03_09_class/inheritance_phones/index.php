<?php
class Smartphone{
    protected $price;
    protected $color;
    protected $width;
    public function __construct()
    {
        $this->price = mt_rand(500,1000);
    }
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function __set($param, $value){
        $this->$param = $value;
    }
    public function __get($param){
        return $this->$param;
    }
}

interface ICall{
    public function call();
}

interface ICalc{
    public function calc();
}

class Iphone extends Smartphone implements ICall, ICalc {

    public function call()
    {
        printf('Айфон звонит<br/>');
    }

    public function calc()
    {
        echo 'Айфон делает расчет<br/>';
    }

    public function __toString()
    {
        return sprintf('Объект класса Iphone с ценой %d цвета %s шириной %d'
            , $this->price, $this->color, $this->width);
    }
}

class Nexus extends Smartphone implements ICall, ICalc {
    public function call()
    {
        printf('Нексус звонит<br/>');
    }
    public function calc()
    {
        echo 'Нексус делает расчет<br/>';
    }
}

$obj = new Iphone();
$obj->color = 'золото';
$obj->width = '5';
echo $obj;
echo '<br/>Цвет: '.$obj->color;