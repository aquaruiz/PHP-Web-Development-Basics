<?php
declare(strict_types = 1);
/**
 * 
 */
class Rectangle implements Area, Circumference
{
	private $sideA;
	private $sideB;

	public function __construct(float $sideA, float $sideB)
	{
		$this->sideA = $sideA;
		$this->sideB = $sideB;
	}

	public function getSurface(){
		return $this->sideA * $this->sideB;
	}

	public function getCircumference(){
		return 2 * $this->sideA + 2 * $this->sideB;
	}

	private function getClassName(){
		$refl = new ReflectionClass($this);
		return $refl->getName();
	}

	public function __toString(){
		return $this->getClassName() . "\r\nwidth = {$this->sideA} mm, height = {$this->sideB} mm\r\nArea = {$this->getSurface()} mm\r\nCircumference = {$this->getCircumference()} mm" . PHP_EOL;
	}
}
?>