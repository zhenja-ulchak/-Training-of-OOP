<?php
class Tag
{
     private $name;
     private $attrs = [];

     public function __construct ($name)
     {
          $this->name = $name;
     }

     public function open ()
     {
          $name = $this->name;
          $attrstr = $this->setAttrStr($this->attrs);
          return "<$name$attrstr>";
     }


     public function close()
     {
          $name = $this->name;
          return "</$name>";
     }

     public function setAttr ($name ,$value)
     {
          $this->attrs[$name] = $value;// в масив передаэм свойство наме и = пер
          //переопридыляэм на перемену $value
          return $this ;
     }

     private function setAttrStr($attrs)
     {
          if (!empty($attrs)) {
               $result = '';
               
               foreach ($attrs as $name => $value) {
                    $result .= " $name=\"$value\"";
               }
               
               return $result;
          } else {
               return '';
          }
     }





}



$Q = new Tag('input');
echo $Q->setAttr('id', 'test')->setAttr('class', 'lll kkb')->open();

































?>