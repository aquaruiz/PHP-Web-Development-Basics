<?php 
/**
  * 
  */
 class MyList extends Collection implements IAddable, IRemovable, IUsable
 {	
 	protected $items;
 	private $used;

	public function __construct()
	{
		$this->items = [];
		$this->used = 0;
	}

 	public function add(string $item)
 	{
 		array_unshift($this->items, $item);
 		return $this->getIndex("first");
 	}

	public function remove()
 	{
 		$shifted = array_shift($this->items);
 		return $shifted;
 	}

 	private function setUsed(){
 		$this->used = count($this->items);
 	}

 	public function getUsed()
 	{
 		$this->setUsed();
 		return $this->used;
 	}
	protected function getIndex(string $command){
		if ($command == "first") {
			return 0;
		}
	 }
 } 
 ?>