<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 09.03.2017
 * Time: 19:19
 */

class Foo{
    static public $counter = 0;
    static private $_instance = null;
    public $discount;
    private function __construct()
    {
        self::$counter++;
        echo '<p>Создан '.self::$counter.'-ый экземпляр';
        $this->discount = mt_rand(5,10);
    }
    private function __clone()
    {
        self::$counter++;
        echo '<p>Создан клон в виде '.self::$counter.'-ый экземпляр';
    }
    static public function getInstance(){
        if (self::$_instance == null){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

}

$f1 = Foo::getInstance();
$f2 = Foo::getInstance();
//$f2 = clone $f1;
//$f2->discount = 100;
print '<pre>';
var_dump($f1);
var_dump($f2);