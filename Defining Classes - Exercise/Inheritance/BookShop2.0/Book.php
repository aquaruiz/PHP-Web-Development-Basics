<?php
declare(strict_types = 1);

/**
 * 
 */
class Book
{
	private $title;
	private $author;
	private $price;

	public function __construct(string $title, string $author, float $price)
	{
		$this->setTitle($title);
		$this->setAuthor($author);
		$this->setPrice($price);
	}

	protected function setTitle(string $title) {
		if (strlen($title) < 3) {
			throw new Exception("Title not valid!");
		}

		$this->title = $title;
	}

	protected function setAuthor(string $author){
		if (is_numeric((explode(" ", $author))[1][0])) {
			throw new Exception("Author not valid!");
		}

		$this->author = $author;
	}

	protected function setPrice(float $price){
		if ($price <= 0) {
			throw new Exception("Price not valid!");
		}

		$this->price = $price;
	}

	public function __toString(){
		return "OK" . PHP_EOL . $this->price;
	}
}
?>