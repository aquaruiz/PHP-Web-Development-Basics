<?php
declare(strict_types = 1);
/**
 * 
 */
class SmartPhone implements iCallable, iBrowsable
{
	public function callOtherPhone(string $numberToCall){
		if ($this->isValidNumber($numberToCall)) {
			return "Calling... ".$numberToCall;
		}
	}

	private function isValidNumber(string $phoneNumber) : bool{
		if (preg_match("/[^0-9]/", $phoneNumber)) {
			throw new Exception("Invalid number!");
		}

		return true;
	}

	public function browseWWW(string $webSite){
		if ($this->isValidSite($webSite)) {
			return "Browsing: {$webSite}!";
		}
	}

	private function isValidSite(string $webSite) : bool{
		if (preg_match("/[0-9]/", $webSite)) {
			throw new Exception("Invalid URL!");
		}

		return true;
	}
}
?>