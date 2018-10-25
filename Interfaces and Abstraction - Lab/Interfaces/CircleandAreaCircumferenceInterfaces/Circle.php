<?php
declare(strict_types = 1);
/**
 * 
 */
class Circle implements Area, Circumference
{
	private $radius;

	public function __construct(float $radius)
	{
		$this->radius = $radius;
	}

	public function getSurface(){
		return pi() * sqrt($this->radius);
	}

	public function getCircumference(){
		return 2 * pi() * $this->radius;
	}

	private function getClassName(){
		$refl = new ReflectionClass($this);
		return $refl->getName();
	}

	public function __toString(){
		return $this->getClassName() . ", radius = {$this->radius} mm:\r\nArea = {$this->getSurface()} mm\r\nCircumference = {$this->getCircumference()} mm" . PHP_EOL;
	}
}
?>