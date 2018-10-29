<?php
spl_autoload_register();
$phoneNumbers = explode(" ", readline());
$webSites = explode(" ", readline());

$myPhone = new Smartphone();
foreach ($phoneNumbers as $phoneNumber) {
	try{
		echo $myPhone->callOtherPhone($phoneNumber).PHP_EOL;
	} catch (Exception $e){
		echo $e->getMessage().PHP_EOL;
	}
}

foreach ($webSites as $site) {
	try{
		echo $myPhone->browseWWW($site).PHP_EOL;
	} catch (Exception $e){
		echo $e->getMessage().PHP_EOL;
	}
}
?>