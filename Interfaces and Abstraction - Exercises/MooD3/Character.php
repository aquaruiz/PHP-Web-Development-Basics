<?php 
/**
 * 
 */
abstract class Character
{
	protected $username;
	protected $hashedPassword;
	protected $level;

	public function __construct(string $username, int $level)
	{
		$this->username = $username;
		$this->level = $level;
	}

	abstract protected function makeHashedPass();

	protected function getUsername()
	{
		return $this->username;
	}

	protected function getPass(){
		return $this->hashedPassword;
	}

	protected function getLevel(){
		return $this->level;
	}

	protected function setHashedPass(string $pass){
		$this->hashedPassword = $pass;
	}
}
 ?>
