<?php
/**
 * 
 */
class Box
{
	private $length;
	private $width;
	private $height;

	public function __construct(float $length, float $width, float $height)
	{
		$this->setLength($length);
		$this->setWidth($width);
		$this->setHeight($height);
	}


	public function getLength() : float {
		return $this->length;
	}

	private function setLength(float $length) {
		$this->validateData($length, "Length");
		$this->length = $length;
	}

	public function getWidth() : float {
		return $this->width;
	}

	private function setWidth(float $width){
		$this->validateData($width, "Width");
		$this->width = $width;
	}

	public function getHeight(): float {
		return $this->height;
	}

	private function setHeight(float $height){
		$this->validateData($height, "Height");
		$this->height = $height;
	}

	private function calcSurfaceArea() : float {
		return  (2 * $this->getLength() * $this->getWidth()) 
		+ (2 * $this->getLength() * $this->getHeight()) 
		+ (2 * $this->getWidth() * $this->getHeight());
	}

	private function calcLateralSurfaceArea() : float {
		return  (2 * $this->getLength() * $this->getHeight())
		 + (2 * $this->getWidth() * $this->getHeight());
	} 

	private function calcVolume() : float {
		return $this->getLength() * $this->getWidth() * $this->getHeight();
	}

	private function validateData(float $parameter, string $type){
		if ($parameter <= 0) {
			throw new Exception("{$type} cannot be zero or negative.");
		}
	}

	private function formatNum(float $num) : string {
		return number_format((round(($num), 2)), 2, ".", "");
	}

	public function __toString():  string {
		$sarea =  number_format($this->calcSurfaceArea(), 2, '.', '');
		$lsArea =  number_format($this->calcLateralSurfaceArea(), 2, '.', '');
		$volume = number_format($this->calcVolume(), 2, '.', '');
		return "Surface Area - {$sarea}\nLateral Surface Area - {$lsArea}\nVolume - {$volume}";
	}
}

$length = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());

try{
	$myBox = new Box($length, $width, $height);
	echo $myBox;
} catch (Exception $exception){
	echo $exception->getMessage() . PHP_EOL;
}
?>