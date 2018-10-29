<?php
interface iIdable{
	public function getId();
	public function isFakeId(string $idPart);
}
?>