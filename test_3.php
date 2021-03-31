<?php

class car {
public $name;
public $color;



public function __construct($name,$color)
{
     $this->name = $name;
     $this->color = $color;

     
}


}



$arrs = [ new car ('волга','чорний'),
          new car ('жига','чорний'),
          new car ('москвич','белий'),
     ];
     print_r($arrs);

foreach ($arrs as $arr) {
     print $arr->name . " ". $arr->color.'<br>';
}



class man 
     {
          public $name;
          public $old;

          public function __construct($name, $old)
          {
                $this->name = $name;
                $this->old = $old;    
          }



     }


     $mans = [
          new man('женя',26),
          new man('саня',22),
          new man('петя',29),
     ];
     foreach ($mans as $man) {
          echo $man->name. ' ' . $man->old .'<br>';
     };

?>