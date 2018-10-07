<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET">
		<textarea name="input">What a wonderful world!</textarea> <br>
		<input type="submit" name="color text" />
	</form>
</body>
</html>
<?php
if (isset($_GET['input'])) {
	$letters = str_split($_GET['input']);
	$letters = array_filter($letters, function ($a) {return $a != "";});
	$letters = array_filter($letters, function ($a) {return $a != " ";});

	foreach ($letters as $letter) {
		$asciiNum = ord($letter);
		if ($asciiNum % 2 == 0) {
		echo "<span style='color: red'>$letter </span>";
			$color = "red";
		} else {
		echo "<span style='color: blue'>$letter </span>";
		}

	}
}
?>