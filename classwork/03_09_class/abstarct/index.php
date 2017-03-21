<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 09.03.2017
 * Time: 19:36
 */
abstract class Category{
    protected $products = [];
    public function __construct()
    {
        for($i=0; $i<3; $i++){
            $this->products[] = [
                'name' => 'product_'.mt_rand(10,90),
                'price' => mt_rand(100,200)
            ];
        }
    }
    abstract public function startSale();
}

class ClothesCategory extends Category{
    public function startSale()
    {
        foreach ($this->products as &$p){
            $p['new_price'] = $p['price']*(100-mt_rand(20,50))/100;
        }
    }

}

class ParfumeCategory extends Category{
    public function startSale()
    {
        // TODO: Implement startSale() method.
    }
}

$clothes = new ClothesCategory();
$parfumes = new ParfumeCategory();
$clothes->startSale();
$parfumes->startSale();
print '<pre>';
var_dump($clothes);
var_dump($parfumes);