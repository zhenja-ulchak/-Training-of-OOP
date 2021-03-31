<?php
 require 'ifile.php';

class File implements iFile
{


     public function __construct($filePath)
     {
         $this->filePath = $filePath ;
     }


     public function getPath() // путь к файлу
     {
          return  $this->filePath;
     }
	 public function getDir()
      {
          return dirname($this->filePath);

      }  // папка файла

	 public function getName() // имя файла
      {
              $t = pathinfo($this->filePath);
           return $t['filename'] . '<br>';
      }

	 public function getExt()  // расширение файла
      {
          $t = pathinfo($this->filePath);
          return $t['extension']. '<br>';
      }

	 public function getSize() // размер файла
      {
           $y = $this->filePath;
           return filesize($y);
      }

      		
	public function getText()          // получает текст файла
      {
          return readfile($this->filePath);
      }

		// public function setText($text);     // устанавливает текст файла
		// public function appendText($text);  // добавляет текст в конец файла
		

}

$R = new File('\OSPanel\domains\test\q\ret.txt');
echo $R->getPath();
echo $R->getDir();
echo $R->getName();
echo $R->getExt();
echo $R->getSize();
echo $R->getText();












?>