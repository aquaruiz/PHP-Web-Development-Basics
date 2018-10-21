<?php
spl_autoload_register();

/**
 * 
 */
class Bicycle extends Vehicle
{
	private $brand;
	private $model;
	private $year;
	private $forSkirt;
	private $mode;

	public function __construct(string $color, string $brand, string $model, int $year, ?bool $forSkirt)
	{
		parent::__construct(0, $color);
		$this->setBrand($brand);
		$this->setModel($model);
		$this->setYear($year);
		$this->setForSkirt($forSkirt);
		$this->mode = null;
	}

	private function setBrand(string $brand) : void {
		$this->brand = $brand;
	}

	private function setModel(string $model) : void {
		$this->model = $model;
	}	

	private function setYear(int $year) : void {
		$this->year = $year;
	}

	public function getForSkirt() {
		if ($this->forSkirt == true) {
			return "Yeap";
		}

		return "Nope";
	}

	private function setForSkirt(?bool $forSkirt) : void {
		$this->forSkirt = $forSkirt;
	}

	private function setMode($mode) : void {
		$this->mode = $mode;
	}

	public function ride() : void {
		$this->setMode("ride");
	}

	public function stop() : void {
		$this->setMode("stop");
	}

	public function __toString() : string {
		return "<table border=1>
		<tr>
            <th>BRAND</th>
            <th>MODEL</th>
            <th>YEAR</th>
            <th>COLOR</th>               
            <th>DOORS</th>
            <th>SKIRT</th>
            <th>RIDE/STOP</th>
        </tr>
        <tr>
        	<td>$this->brand</td>
        	<td>$this->model</td>
        	<td>$this->year</td>
        	<td>$this->color</td>
        	<td>$this->numberDoors</td>
        	<td>{$this->getForSkirt()}</td>
        	<td>$this->mode</td>
        </tr>
        </table>";
	}
}

$myBike = new Bicycle("pink", "Pegasus", "X10", 2011, false);
$myBike->ride();
var_dump($myBike);
echo $myBike;
?>