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

interface IDelivery{
    const template = '<p>Цена доставки %d рублей.</p>';
    public function getDeliveryPrice();
}

interface IPickup{
    const template_pickup = '<p>Забор товара из пунтка вывоза бесплатен.</p>';
    public function getPickupPrice();
}

class ClothesCategory extends Category implements IDelivery, IPickup {
    public function startSale()
    {
        foreach ($this->products as &$p){
            $p['new_price'] = $p['price']*(100-mt_rand(20,50))/100;
        }
    }

    public function getDeliveryPrice()
    {
        printf(IDelivery::template, 10);
    }

    public function getPickupPrice()
    {
        echo self::template_pickup;
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
//var_dump($clothes);
//var_dump($parfumes);
$clothes->getDeliveryPrice();
$clothes->getPickupPrice();