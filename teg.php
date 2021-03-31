<?php
class Tag
{
     private $name;
     private $attrs;
     
     public function __construct($name, $attrs = [])
     {
          $this->name = $name;
          $this->attrs = $attrs; // записываем атрибуты в свойство
     }
     
     public function open()
     {
          $name = $this->name;
          $attrsStr = $this->getAttrsStr($this->attrs); // формируем строку с атрибутами
          
          return "<$name$attrsStr>"; // добавляем атрибуты после имени тега
     }
     
     public function close()
     {
          $name = $this->name;
          return "</$name>";
     }
     
     // Формируем строку с атрибутами:
     private function getAttrsStr($attrs)
     {
          if (!empty($attrs)) { // перевырка на пустоту
               $result = ''; // пуста перемена
               
               foreach ($attrs as $name => $value) {
                    $result .= " $name=\"$value\""; // присвоение перебора
               }
               
               return $result;
          } else {
               return '';
          }
     }
}


$tag = new Tag('input', ['id' => 'test', 'class' => 'eee bbb']);
echo $tag->open(); // выведет <input id="test" class="eee bbb">









?>