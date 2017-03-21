<?php
class Animal{
    protected $name;
    protected $color;

    public function setColor($val){
        switch ($val){
            case 'black' : $val = '<b>'.$val.'</b>';break;
            case 'yellow' : $val = '<span style="color:yellow">'.$val.'</span>';break;
        }
        $this->color = $val;
    }

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        Animal::$counter ++;
        echo '<p>Популяци животных увеличилась 
            и стала равна '.self::$counter;
    }

    static public $counter = 0;

    static public function manuallyIncreasePopulation(){
        self::$counter++;
    }

    public function talk(){
        printf('<p>Животное %s подало голос.</p>',$this->name);
    }
}