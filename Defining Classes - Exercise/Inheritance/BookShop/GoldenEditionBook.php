<?php
declare(strict_types = 1);

/**
 * 
 */
class GoldenEditionBook extends Book
{
	public function setPrice($price){
		$goldPrice = 1.3 * $price;
		parent::setPrice($goldPrice);
	}
}
?>