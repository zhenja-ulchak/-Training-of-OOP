<?php
class user 
{
     public $name;
     public $surname;
     protected $age;


     public function setName($name)
     {
          if ($name == '') {// перевырка
               echo  'хуй с гори' ;
           }
          $this->name = $name;
     }
    
     public function setSurname($surname)
     {
           $this->surname = $surname;
     }
 
     public function setage($age)
     {    
          if ($age >= 18 and $age <= 25) { // перевырка 
               $this->age = $age;
          }else {
               echo 'сука коля пидарас';
          }
     }
     public function addage()
     {
          $this->age++;
     }

     public function getUser()
     {
          echo  '<br>'.$this->name. '<br>'. $this->surname . '<br>' . $this->age ;// вивод всих гетерив
     }
} 

class prepod extends user
{
     protected $prepode;

      public function getprepode()
      {
           return $this->prepode;
      }
      public function addOneYear()
      {
           $this->age++;
      }
      public function setAge($age)
      {
           if (is_int($age)) {
               parent::setAge($age);
           }else {
                    echo 'бля нето';
           }
      }





}

$y = new prepod('ggg');
$y->setName('коля');

$y->setSurname('пидор');

$y->setage(20);

$y->getUser();








?>