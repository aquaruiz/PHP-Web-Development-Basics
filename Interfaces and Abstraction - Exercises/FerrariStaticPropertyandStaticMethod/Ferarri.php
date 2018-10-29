<?php
declare(strict_types = 1);

/**
 * 
 */
class Ferarri implements iCar
{
	public static $objNum;
	private $model;
	private $driver;

	function __construct(string $driver, string $model = "488-Spider")
	{
		self::$objNum++;
		$this->driver = $driver;
		$this->model = $model;
	}

	public function useBrakes(){
		return "Brakes!";
	}

	public function useGasPedal(){
		return "Zadu6avam sA!";
	}

	static function forUrl(string $str, string $rep="-"){
		$newString = str_replace(" ", $rep, $str);
		return strtolower($newString);
	}

	public function __toString(){
		$outputName = self::forUrl($this->driver);
		$id = self::$objNum;
		
		return "{$this->model}/{$this->useBrakes()}/{$this->useGasPedal()}/{$outputName}/ inst. {$id}";
	}
}
?>