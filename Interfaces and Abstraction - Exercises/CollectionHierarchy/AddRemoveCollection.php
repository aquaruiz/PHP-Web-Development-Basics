<?php 
/**
 * 
 */
class AddRemoveCollection extends Collection implements IAddable, IRemovable
{
	protected $items;

	public function __construct()
	{
		$this->items = [];
	}

 	public function add(string $item)
 	{	
 		array_unshift($this->items, $item);
 		return $this->getIndex("first");
 	}

	public function remove()
 	{
 		$popped = array_pop($this->items);
 		return $popped;
 	}

	protected function getIndex(string $command){
		if ($command == "first") {
			return 0;
		}
	 } 
}
 ?>