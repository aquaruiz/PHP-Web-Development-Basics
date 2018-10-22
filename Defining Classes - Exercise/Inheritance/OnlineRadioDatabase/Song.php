<?php
/**
 * 
 */
class Song
{
	private $artistName;
	private $songName;
	private $length;

	public function __construct(string $artistName, string $songName, array $length)
	{
		$this->setArtistName($artistName);
		$this->setSongName($songName);
		$this->setLength($length);
	}

	private function setArtistName(string $artistName){
		if (strlen($artistName) < 3 || strlen($artistName) > 20) {
			throw new Exception("Artist name should be between 3 and 20 symbols.");
		}

		$this->artistName = $artistName;
	}

	private function setSongName( string $songName){
		if (strlen($songName) < 3 || strlen($songName) > 20) {
			throw new Exception("Song name should be between 3 and 30 symbols.");
		}

		$this->songName = $songName;
	}

	public function getLength(): array {
		return $this->length;
	}
	
	private function setLength(array $length){
		$minutes = $length[0];
		$seconds = $length[1];

		if ($minutes < 0 || $minutes > 14) {
			throw new Exception("Song minutes should be between 0 and 14.");
		}

		if ($seconds < 0 || $seconds > 59) {
			throw new Exception("Song seconds should be between 0 and 59.");
		}

		$this->length = [
			"minutes" => $minutes,
			"seconds" => $seconds];
	}
}
?>