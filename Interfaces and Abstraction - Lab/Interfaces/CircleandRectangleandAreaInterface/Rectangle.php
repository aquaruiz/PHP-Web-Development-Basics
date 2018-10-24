<?php
declare(strict_types = 1);
/**
 * 
 */
class Rectangle implements Area
{
	private $sideA;
	private $sideB

	public function __construct(float $sideA, float $sideB)
	{
		$this->sideA = $sideA;
		$this->sideB = $sideB;
	}

	public function getSurface(){
		return pi() * sqrt($this->radius);
	}

	private function getClassName(){
		$refl = new ReflectionClass($this);
		return $refl->getName();
	}

	public function __toString(){
		return $this->getClassName() . ", radius = {$this->radius} mm, area = {$this->getSurface()} mm";
	}
}
?>