<?php
declare(strict_types = 1);
/**
 * 
 */
class Circle implements Area
{
	private $radius;

	public function __construct(float $radius)
	{
		$this->radius = $radius;
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