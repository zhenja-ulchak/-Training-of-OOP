<?php

require 'test_10_1.php';
class Person
{
      public $name;
      public $age;
      public $salary;
      public $helper;


      public function __construct($name,$age,$salary)
      {
          $this->name = $name;
          $this->age = $age;
         $this->salary = $salary ;
          $this->helper = new Premia;

      }

      public function getName()
      {
           if (mb_strlen($this->name) > 3 || mb_strlen($this->name) < 5 ) 
           {
               return $this->name . '<br>';
           }
           else 
           {
                return $this->fucName();
           }
          
      }
      

      public function getAge()
      {
           if ($this->age > 18 || $this->age < 60) 
           {
               return $this->age . '<br>';
           }
           else 
           {
            return $this->resAge();
           }
           
      }

      public function resAge()
      {
          echo 'сука красава';
      }

      public function fucName()
      {
          echo 'введи правельное имя';
      }

      public function ponut()
      {
        $termo = $this->helper->hetPrem();
        print   '<br>' . $termo . $this->salary;
        
      }

      public function ewq()
      {
        $salary = $this->salary;
        $term = $this->helper->summ($salary);
        return $term;

      }





}



$t = new Person('женя',26,2000);
echo $t->getAge();
echo $t->getName();

echo $t->ponut();
echo $t->ewq();





?>