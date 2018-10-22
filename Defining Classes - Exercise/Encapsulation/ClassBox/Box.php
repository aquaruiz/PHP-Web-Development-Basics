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
		$this->length = $length;
		$this->width = $width;
		$this->height = $height;
	}

	private function formatNum(float $num) : string {
		return number_format((round(($num), 2)), 2, ".", "");
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
$myBox = new Box($length, $width, $height);
// var_dump($myBox);
echo $myBox;
?>