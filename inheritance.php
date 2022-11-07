<?php
class Animal{
    public $weight = 40;
    public $height = 50;
    private $color = 'red';

    public function getColor(){
        return $this->color;
    }

     public function move(){
        echo "Moving <br>";
        // echo "color" . $this->color;
     }
     public function eat(){
        echo "Eating <br>";
     }
     
}
class Dog extends Animal{

}
// $animal = new Animal();
// $animal->move();
$dog = new Dog();
$dog->move();
// echo $dog->color;
echo $dog->getColor();


?>