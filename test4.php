<?php
class Student
{
     private $name;
     private $course;
     
     public function __construct($name)
     {
          $this->name = $name;
          $this->course = 1;
     }
     
     // Геттер имени:
     public function getName()
     {
          return $this->name;
     }
     
     // Геттер курса:
     public function getCourse()
     {
          return $this->course;
     }
     
     // Перевод студента на новый курс:
     public function transferToNextCourse()
     {
          $i = $this->course;
          if ($i >= 5 ) {
               echo 'стоп';
          }
          
     }
}
$student = new Student('Коля'); // создаем объект класса
	
	echo $student->getCourse(); // выведет 1 -
		
     $student->transferToNextCourse();
// переведем студента на следующий курс
     echo $student->getCourse();
     


?>