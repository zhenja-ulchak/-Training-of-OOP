<?php
$nm = 'эбать сработало';
$rt = 'бля хуйня';

function test_($ffff){
   
     $qwer = ucwords(implode($ffff));
     echo  $qwer;
     return $qwer;
     
}

function qwa ($seter){

     for ($i=0; $i < $seter; $i++) { 
        
          if($seter > 0){
               print $GLOBALS['nm'] . "<br>";
          }else{
               print $GLOBALS['rt'] . "<br>";
          }

       }

}



qwa (10);


?>