<?php


class TAg
{
     private $name;
     public $liname =[];
     
     public function __construct($name,$liname = [])
     {
          $this->name = $name;   
          $this->liname = $liname;
     }
     public function open ()
     {
         $name = $this->name;
         return "<$name>" ;
     }

     public function close ()
     {
          $name = $this->name;
          return "</$name>";
     }
     // public function setliname($liname = [])
     // {
     //      return $this->liname[] = $liname;
     // }

     public function getliname ()
     {
          $liname = $this->liname;
          
          foreach ($liname as $value) 
          {
            echo $this->open() . $value. $this->close() ;
          }
          
     }



   
     
}


$Q = new TAg ('li',['перший','другий', 'третий']);
//  $Q->setliname('перший','другий', 'третий');
//  $Q->setliname('другий', 'третий');
echo $Q->getliname(); 

































?>