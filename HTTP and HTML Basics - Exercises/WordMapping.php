<!DOCTYPE html>
<html>
<body>
	<form method="POST">
		<textarea name="input">
		</textarea> <br>
		<input type="submit" name="count" />
	</form>
</body>
</html>
<?php
if (isset($_POST['input'])) {
	$words = preg_split("/\W+/", $_POST['input']);
	$words = array_filter($words, function ($a) {return $a != "";});
	$words = array_map("strtolower", $words);

	$countWords = [];
	foreach ($words as $word) {
		if (!array_key_exists($word, $countWords)) {
			$countWords[$word] = 0;
		}

		$countWords[$word]++;
	}

	echo "<table border='2'>" . PHP_EOL;
	foreach ($countWords as $word => $count) {
		echo "<tr>" . PHP_EOL;
		echo "<td>$word</td>" . PHP_EOL;
		echo "<td>$count</td>" . PHP_EOL;
		echo "</tr>" . PHP_EOL;
	}

	echo "</table>";
}
?>