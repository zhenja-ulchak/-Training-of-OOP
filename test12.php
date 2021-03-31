<?php

abstract class cart 
{
     abstract public function muyi($a);
     abstract public function nyu($b,$r);

}




class termo extends cart 
{
     private $number;
     public function __construct($number)
     {
          $this->number = $number;
     }
     public function muyi($a)
     {
       return $this->number * $a;
     }
     public function nyu($b,$r)
     {
          return $this->number * $b + $r ;
     }


}

$T = new termo(5);
echo $T->muyi(164165126541268);
echo $T->nyu(1222,6545164);






































?>