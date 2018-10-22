<?php
declare(strict_types = 1);

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

	private function isValidateSize(float $size, string $type) : bool {
		if ($size > 0 && is_numeric($size)) {
			return true;
		}

		throw new Exception("$type cannot be zero or negative.");
	}

	private function setLength(float $length) : void {
		if ($this->isValidateSize($length, "Length")) {
			$this->length = $length;
		}
	}

	private function setWidth(float $width) : void {
		if ($this->isValidateSize($width, "Width")) {
			$this->width = $width;
		}
	}

	private function setHeight(float $height) : void {
		if ($this->isValidateSize($height, "Height")) {
			$this->height = $height;
		}
	}

	private function formatNum(float $num) : string {
		return number_format(round($num, 2), 2, ".", "");
	}

	private function calcSurfaceArea() : float {
		return  2 * $this->length * $this->width 
		+ 2 * $this->length * $this->height 
		+ 2 * $this->width * $this->height;
	}

	private function calcLateralSurfaceArea() : float {
		return  2 * $this->length * $this->height + 2 * $this->width * $this->height;
	} 

	private function calcVolume() : float {
		return $this->length * $this->width * $this->height;
	}

	public function __toString():  string {
		$sarea = $this->calcSurfaceArea();
		$lsArea = $this->calcLateralSurfaceArea();
		$volume = $this->calcVolume();
		return "Surface Area - {$this->formatNum($sarea)}
Lateral Surface Area - {$this->formatNum($lsArea)}
Volume - {$this->formatNum($volume)}";
	}
}

$length = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());
try{
	$myBox = new Box($length, $width, $height);
	echo $myBox;

} catch (Exception $e){
	echo $e->getMessage();
	die();
}
?>