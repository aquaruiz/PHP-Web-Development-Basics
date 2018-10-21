<?php
spl_autoload_register();

/**
 * 
 */
class Car extends Vehicle
{
	protected $color;
	private $brand;
	private $model;
	private $year;

	public function __construct(int $numberDoors, string $color, string $brand, string $model, int $year)
	{
		parent::__construct($numberDoors, $color);
		$this->setBrand($brand);
		$this->setModel($model);
		$this->setYear($year);
	}

	/**
	* @ var void
	*/
	private function setBrand(string $brand) : void {
		$this->brand = $brand;
	}

	/**
	* @ var void
	*/
	private function setModel(string $model) : void {
		$this->model = $model;
	}

	/**
	* @ var void
	*/
	private function setYear(int $year) : void {
		$this->year = $year;
	}

	public function changeColor($color) : void {
		parent::setColor($color);
	}
}

$myCar = new Car(4, "Red", "Audi", "A4", 2016);
var_dump($myCar);
$myCar->setDoors(15);
var_dump($myCar);

?>