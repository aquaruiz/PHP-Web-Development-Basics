<?php
declare(strict_types = 1);

interface Person{
	public function setId(string $id);
	public function setName(string $name);
	public function setAge(int $age);
	public function setBirthday(string $setBirthday);
}
?>