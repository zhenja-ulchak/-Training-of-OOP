<!DOCTYPE html >
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Две колонки</title>
  <style type="text/css">
   #leftcol {
    float: left;
    background: #f0f0f0;
    width: 200px;
   }
   #rightcol {
    float: left;
    background: #fc0;
    width: 200px;
   }
  </style>
 </head>
 <body>
     <?php include_once("date.php"); ?> 
  <div id="leftcol"><?=  $D->getDate(); ?></div>
  <div id="rightcol"><?= $D->getNewYer(); ?></div>
  <div id="leftcol"><?= $D->getMonth('ru'); ?></div>



 








 </body>
</html>