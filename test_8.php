<?php

     class User
	{
          protected $name; // объявим свойство защищенным
		protected $age;  // объявим свойство защищенным
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}
     class Student extends User
	{
		private $course;
		
		// Конструктор объекта:
		public function __construct($name, $age, $course)
		{
			parent::__construct($name, $age); // вызываем конструктор родителя
			$this->course = $course;
		}
		
		public function getCourse()
		{
			return $this->course;
		}
	}

     $student = new Student('Коля', 19, 2);
	
	echo $student->getName(); // выведет 'Коля'
	echo $student->getAge(); // выведет 19
	echo $student->getCourse(); // выведет 2




?>