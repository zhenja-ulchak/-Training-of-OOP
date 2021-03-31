<?php

require 'podtest.php';
class Arr
	{
		private $nums = []; // массив чисел
		private $sumHelper; // сюда запишется объект класса SumHelper
		
		// Конструктор класса:
		public function __construct()
		{
			$this->sumHelper = new SumHelper;
		}
		
		// Находим сумму квадратов и кубов элементов массива:
		public function getSum23()
		{
			// Для краткости запишем $this->nums в переменную:
			$nums = $this->nums;
			
			// Найдем описанную сумму:
			return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
		}
		
		// Добавляем число в массив:
		public function add($number)
		{
			$this->nums[] = $number;
		}
	}
	$arr = new Arr(); // создаем объект
	
	$arr->add(1); // добавляем в массив число 1
	$arr->add(2); // добавляем в массив число 2
	$arr->add(3); // добавляем в массив число 3
	
	// Находим сумму квадратов и кубов:
	echo $arr->getSum23();


?>