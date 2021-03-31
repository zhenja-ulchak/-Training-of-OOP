<?php

class magazine
{

     use helper;

     public function __construct($water,$bret,$oil)
     {
          $this->water = $water;
          $this->bret = $bret;
          $this->oil = $oil;         
     }
     
}


trait helper 
{
     public $water;
     public $bret;
     public $oil;


     public function getWater()
     {
          return $this->water;

     }
     public function getBret()
     {
          return $this->bret;

     }
     public function getOil()
     {
          return $this->oil;
          
     }

     public function getСart()
     {
          $Y = $this->getWater();
          $OLL = mb_strtoupper($Y, 'UTF8');
          
          return $OLL;
     }
} 

$Q = new magazine('coca cola', 'bret', 'oil');
echo $Q->getСart();
echo $Q->getBret();
echo $Q->getOil();






























?>