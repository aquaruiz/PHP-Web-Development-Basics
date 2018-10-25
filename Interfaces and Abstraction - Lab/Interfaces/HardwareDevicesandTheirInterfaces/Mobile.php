<?php
declare (strict_types = 1);

/**
 * 
 */
abstract class Mobile
{
	private $operator;
	private $canCall; #(true / false)
	private $battery; #(%)

	function __construct(string $operator, bool $canCall, float $battery)
	{
		$this->operator = $operator;
		$this->canCall = $canCall;
		$this->battery = $battery;
	}
}
?>