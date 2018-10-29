<?php 
/**
 * 
 */
class Food
{
	protected $quantity;

	function __construct(int $quantity)
	{
		$this->quantity = $quantity;
	}

	public function getFoodType(){
		$type = new ReflectionClass($this);
		$name = $type->getName();
		return $name;
	}

	public function getFoodQnty(){
		return $this->quantity;
	}
}
 ?>