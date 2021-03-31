<?php
	class Tag
	{
		private $name;
		private $attrs = []; // изначально пустой мас
		
		 
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		// Реализуем метод для атрибутов:
		public function setAttr($name, $value)
		{
			$this->attrs[$name] = $value;
			return $this; // возвращаем $this чтобы была цеп
			
		 }
		
		public function open()
		{
			$name = $this->name;
			$attrsStr = $this->getAttrsStr($this->attrs);
		 	
			return "<$name$attrsStr>";
		}
		
		public function close()
		{
			$name = $this->name;
			return "</$name>";
		}
		
		private function getAttrsStr($attrs)
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

     $tag = new Tag('input');
	
	echo $tag
		->setAttr('id', 'test') // добавляем атрибут 'id'
		->setAttr('class', 'eee bbb') // добавляем атрибут 'class'
		 ->open(); // выведет <input id="test" class="eeebbb">
?>