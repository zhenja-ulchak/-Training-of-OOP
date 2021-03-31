<?php
interface ret 
{
     public function getnumber($y);
     public function gettotalnumber($x);
}


class salary implements ret 
{

     public $numb_1;
     public $numb_2;


    public function __construct($numb_1,$numb_2)
    {
          $this->numb_1 = $numb_1;
          $this->numb_2 = $numb_2;
    }

    public function getnumber($y)
    {
         $y = $this->numb_1;
         if ($y < 1000) {

              echo 'yes';
         }
         
    }
    public function gettotalnumber($x)
    {
         $y = $this->numb_2;
         if ($y <= 1000000) {

             echo number_format($x);
         }
         
    }
     
}

$r = new salary(500,10000);
$r->getnumber(20);
$r->gettotalnumber(5649);




?>