<?php
declare(strict_types = 1);
/**
 * 
 */
class Ferarri implements iCar
{
	private $model;
	private $driver;

	function __construct(string $driver, string $model = "488-Spider")
	{
		$this->driver = $driver;
		$this->model = $model;
	}

	public function useBrakes(){
		return "Brakes!";
	}

	public function useGasPedal(){
		return "Zadu6avam sA!";
	}

	public function __toString(){
		return "{$this->model}/{$this->useBrakes()}/{$this->useGasPedal()}/{$this->driver}";
	}
}
?>