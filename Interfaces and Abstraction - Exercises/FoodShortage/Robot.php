<?php
/**
 * 
 */
class Robot implements iIdable
{
	private $model;
	private $id;

	public function __construct(string $model, string $id)
	{
		$this->model = $model;
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function isFakeId(string $idPart){
		$str = substr($this->id, -strlen($idPart));
		return $str == $idPart;
	}
}
?>