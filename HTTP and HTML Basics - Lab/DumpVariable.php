<!DOCTYPE html>
<html>
<head>
	<title>Var Dump It</title>
</head>
<body>
	<form>
		<input type="text" name="var" />
		<input type="submit" name="dump it">
	</form>
</body>
</html>
<?php
if (isset($_GET['var'])) {
	$var = $_GET['var'];
	if (is_numeric($var)) {
		if ($var * 1000 % 1000 == 0) {
			var_dump(intval($var));
		} else {
			var_dump(floatval($var));
		}
	} else {
		echo gettype($var);
	}
}
?>