<?php
class Datee
{
     public $date = null;

     public function __construct ($date = null)
     {
          $this->date = $date;
          if ($this->date == '') {
               echo date('Y-m-d');
          }
               
     }

     public function getDate()
     {
          $date = $this->date;
          $d1 = strtotime($date); // переводит из строки в дату
          $date2 = date("'Y-m-d'", $d1); // переводит в новый формат
          return  '<br>' . $date2;
     }

     public function getDay()
     {

          $date = $this->date;
          $d1 = strtotime($date); // переводит из строки в дату
          $date2 = date("d", $d1); // переводит в новый формат
          return  '<br>' . $date2;
     } 

     public function getNewYer()
     {

          $date = $this->date;
          $d1 = strtotime($date); // переводит из строки в дату
          $date2 = date("Y", $d1); // переводит в новый формат
          return  '<br>' . $date2 ;
     }
     
     public function getMonth($lang = null)
     {
          $_monthsList = array(".01." => "января", ".02." => "февраля", 
          ".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня", 
          ".07." => "июля", ".08." => "августа", ".09." => "сентября",
          ".10." => "октября", ".11." => "ноября", ".12." => "декабря");
          $currentDate = date("M");
          $_mD = date(".m.");
          $currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ",$currentDate );
          if ($lang == 'en') 
          {
               return date('M');
          }
          elseif 
          ($lang == 'ru') 
          {
               return '<br>' . $currentDate ;
          }
           
     }
     
     public function getYear()
     {
          return date('Y');
     }
     
     public function getWeekDay($lang = null)
     {
          $days = array(
               'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
               'Четверг', 'Пятница', 'Суббота'
          );
          
          if ($lang == 'en') 
          {
               return date('D');
          }
          elseif ($lang == 'ru') 
          {
               return;
          }
     }
     
     public function addDay($value)
     {
          return '<br>' . $value = $value + date('d');
     }
     
     public function subDay($value)
     {
          return '<br>' . $value = date('d') - $value;
     }
     
     public function addMonth($value)
     {
          return '<br>' . $value = $value + date('m');
     }
     
     public function subMonth($value)
     {
          return '<br>' . $value = date('m') - $value;
     }
     
     public function addYear($value)
     {
          return '<br>' . $value = $value + date('Y');
     }
     
     public function subYear($value)
     {
          return '<br>' . $value = date('Y') - $value;
     }
     
     public function format($format)
     {
          
         

     }
     
   











}


// $date1 = new Datee('2025-12-31');
// echo $date1->getDate();




?>