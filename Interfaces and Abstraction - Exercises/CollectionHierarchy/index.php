<?php 
spl_autoload_register();

$items = explode(" ", readline());
$removes = intval(readline());

$myAddColection = new AddCollection();
$myAddRemoveColection = new AddRemoveCollection();
$myList = new MyList();

$addCollectionResults = "";
$addRemoveCollectionResults = "";
$myListResults = "";

foreach ($items as $item) {
	$addCollectionResults .= $myAddColection->add($item)." ";
	$addRemoveCollectionResults .= $myAddRemoveColection->add($item)." ";
	$myListResults .= $myList->add($item)." ";
}

$addRemoveCollectionRemoves = "";
$myListRemoves = "";

for ($i=0; $i < $removes; $i++) { 
	$addRemoveCollectionRemoves .= $myAddRemoveColection->remove()." ";
	$myListRemoves .= $myList->remove()." ";
}

echo $addCollectionResults.PHP_EOL;
echo $addRemoveCollectionResults.PHP_EOL;
echo $myListResults.PHP_EOL;

echo $addRemoveCollectionRemoves.PHP_EOL;
echo $myListRemoves.PHP_EOL;
?>