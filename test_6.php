<?php

class S
{
	public $color;
	public $car;


	public function setColor($color)
	{
		$this->color = $color;
	}
	public function getColor()
	{
		return $this->color;
	}
	public function setCar($car)
	{
		$this->car = $car;
	}
	public function getCar()
	{
		return $this->car;
	}
	
}
class B extends S
{
	public $row;

	public function setRow($row)
	{
		$this->row = $row;
	}
	public function getRow()
	{
		return $this->row;
	}
	public function vivod()
	{
		return  '<br>'. $this->color .' '. $this->car .' '. $this->row;

	}
	

}

$y = new B;
$y->setColor('red');
$y->setCar('BMW');
$y->setRow('4x4');
echo $y->getColor();
echo $y->getCar();
echo $y->getRow();
echo $y->vivod();




?>