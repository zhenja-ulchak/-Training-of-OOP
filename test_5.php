<?php
class person 
{
     public $rest;
     public $sury = 5;

     
     public function setrest($rest)
     {
          $this->rest = $rest;
     }

   


  

     public function turn ($ret)
     {
          if ($ret == $this->sury) {
               return $this->sury;
          }
         
     }

     public function hey ( $ret)
     {
          if ($ret == 4) {
              return $this->rest;
          } 
              
          
     }
}


class man extends person
{
     public $io = [];

     public function mas ($io = [])
     {
          $this->io = $io;
          $io = array_fill($this->sury, $this->rest, 'iiiopokkmrg');
          echo $io;
          var_dump($io);
     }
}

$u = new man ();
$u->mas();

$y = new person ();
$y->turn(5);
$y->setrest('iiii');
$y->hey(5);






?>