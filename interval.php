<?php
require 'date.php';
class Interval
{
     
     public function __construct ($date1,$date2)
     {
          $this->date1 = $date1;
          $this->date2 = $date2;

     }
     public function toDays()
     {
          $d1 = $this->date1->getDate();
          $d2 = $this->date2->getDate();
          
          return date_modify ($d1 , $d2);
          

         
     }
     
     // public function toMonths()
     // {
     //      // вернет разницу в месяцах
     // }
     
     // public function toYears()
     // {
     //      // вернет разницу в годах
     // }
     
     // public function __toString()
     // {
     //      // выведет результат в виде массива
     //      // ['years' => '', 'months' => '', 'da
     //           ys' => '']
     //  }     

























}
$date1 = new Datee('2029-12-31');
$date2 = new Datee('2028-11-22');

$interval = new Interval($date1, $date2);

echo $interval->toDays();  










?>