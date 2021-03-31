<?php

interface iuser 
{
    public function __construct($y,$x);

    public function getgudr();

    public function getsum();

    public function formul();
       
}

class User implements iuser
{
     public $y;
     public $x;

     public function __construct($y,$x)
     {
          $this->y = $y;
          $this->x = $x;

     }
     public function getgudr()
     { 
          $r = $this->y;
          for ($i=0; $i < $r; $i++) { 
              echo '<br>'.$r;
          }
           return $r;
          
     }
     public function getsum()
     {
          $sum = $this->y * $this->x;
          return $sum;
     }

     public function formul()
     {
          $revision = decbin($this->getsum());
         return $revision ;

     }



}

$q = new User(10,122);
 $q->getgudr();
 echo $q->getsum();
 echo $q->formul();

























?>