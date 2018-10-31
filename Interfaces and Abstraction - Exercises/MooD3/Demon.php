<?php 
/**
  * 
  */
 class Demon extends Character
 {
 	private $energy;

 	public function __construct(string $username, int $level, float $energy)
 	{
 		parent::__construct($username, $level);
 		$this->setHash();
 		$this->energy = $energy;
 	}

 	protected function makeHashedPass()
 	{
 		return strlen(parent::getUsername()) * 217;
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
 		$points = $this->energy * parent::getLevel();

        return '"'.$name.'" | "'.$pass.'" -> Demon'."\n".sprintf("%0.1f",round($points,1)); 	
    }
 } 
 ?>