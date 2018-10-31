<?php 
/**
 * 
 */
class Archangel extends Character
{
 	private $mana;

 	public function __construct(string $username, string $level, int $mana)
 	{
 		parent::__construct($username, $level);
 		$this->setHash();
 		$this->mana = $mana;
 	}

 	protected function makeHashedPass()
 	{
 		return strrev(parent::getUsername()) . strval(strlen(parent::getUsername()) * 21);
 	}

 	private function setHash()
 	{
 		$hash = $this->makeHashedPass();
 		parent::setHashedPass($hash);
 	}
 
 	public function __toString(){
 		$name = parent::getUsername();
 		$pass = parent::getPass();
 		$class = self::Class;
 		$points = intval($this->mana * parent::getLevel());
 		return "\"$name\" | \"$pass\" -> $class".PHP_EOL.$points;
 	}
}
 ?>