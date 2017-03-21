<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 07.03.2017
 * Time: 19:22
 */

require_once ('Chair.class.php');

$tables[] = new Chair(100, 'white', 160, 70, 2);
$tables[] = new Chair(100, 'black', 160, 70, 3);

print '<pre>';
var_dump($tables);
//echo $table->color;
foreach ($tables as $table){
    $table->createDiscount();
}
var_dump($tables);

