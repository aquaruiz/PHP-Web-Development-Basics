<?php
declare(strict_types = 1);

/**
 * 
 */
class GoldenEditionBook extends Book
{
	public function __construct(string $name, string $author, float $price)
	{
		$goldenPrice = 1.3 * $price;
		parent::__construct($name, $author, $goldenPrice);
	}
}
?>