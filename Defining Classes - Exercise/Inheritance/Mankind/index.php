<?php
spl_autoload_register();

$studentInput = readline();
$workerInput = readline();

try{
	list($firstName, $lastName, $facultyNumber) = explode(" ", $studentInput);
	$student = new Student($firstName, $lastName, $facultyNumber);

	list($firstName, $lastName, $weekSalary, $workHoursPerDay) = explode(" ", $workerInput);
	$worker = new Worker($firstName, $lastName, floatval($weekSalary), intval($workHoursPerDay));

	echo $student;
	echo PHP_EOL;
	echo PHP_EOL;
	echo $worker;
} catch (Exception $e){
	echo $e->getMessage();
}
?>