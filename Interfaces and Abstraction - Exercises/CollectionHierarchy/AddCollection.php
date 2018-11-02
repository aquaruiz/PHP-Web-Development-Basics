<?php 
/**
  * 
  */
 class AddCollection extends Collection implements IAddable
 {
 	protected $items;

	public function __construct()
	{
		$this->items = [];
	}

 	public function add(string $item)
 	{
 		$this->items[] = $item;
 		return $this->getIndex("last");
 	}

	protected function getIndex(string $command){
		if ($command == "last") {
			return count($this->items) - 1;
		}
	 } 
 }
 ?>