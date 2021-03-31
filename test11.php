<?php
abstract class User 
{
  public $name;

     public function getName()
     {
          return $this->name;
     }
     public function setName($name)
     {
           $this->name = $name;
     }

     abstract public function tura ($value);
     
}


class ret extends User  
{
     private $color;

     public function getcolor()
     {
          return $this->color . '<br>' . $this->name;
     }
     public function setcolor($color)
     {
          $this->color = $color;
     }
     public function tura ($value)
     {

          echo $this->name . $value;
     }


}

$y = new ret;
$y->setName('rrr');
$y->setcolor('ggg');
echo $y->getcolor();
$y->tura('suka');




?>