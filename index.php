<?php
require('test.php');
function ddd (){
     $red="zhenja tut::::::";
     $ert = 'fdhh';
    $tt = addcslashes ($red, $ert);
     $set = ucwords($ert);
      
      if ($set != '') {
          echo $set .' '. $tt .' '. '<br>' .'Эбать я красава' ;
      } else {
          echo 'ne to';
      } 
}
$test = ['hi hi ','my frend',' beich'];
//echo test_($test);

 test_($test);
ddd ();








?>

