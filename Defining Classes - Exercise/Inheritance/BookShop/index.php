<?php
spl_autoload_register();

$author = readline();
$title = readline();
$price = floatval(readline());
$bookType = readline();

try{
switch ($bookType) {
	case 'STANDARD':
		$myBook = new Book($title, $author, $price);
		break;
	case 'GOLD':
		$myBook = new GoldenEditionBook($title, $author, $price);
		break;
}

echo $myBook;
} catch (Exception $e){
	echo $e->getMessage();
}
?>