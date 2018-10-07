<?php
if (isset($_REQUEST['num1']) && isset($_REQUEST['num2'])) {
	$num1 = $_REQUEST['num1'];
	$num2 = $_REQUEST['num2'];
	$sum = floatval($num1) + floatval($num2);
	echo "$num1 + $num2 = $sum";
}
?>
<form>
    <div>First Number:</div>
    <input type="number" name="num1" />
    <div>Second Number:</div>
    <input type="number" name="num2" />
    <div><input type="submit" /></div>
</form>