<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET">
		Categories: <input type="text" name="categories" /> <br>
		Tags: <input type="text" name="tags" /><br>
		Months: <input type="text" name="months" /><br>
		<input type="submit" value="generate" name="submit" /><br>
	</form>
</body>
</html>
<?php
if (isset($_GET['submit'])) {
	$categories = explode(", ", $_GET['categories']);
	$tags = explode(", ", $_GET['tags']);
	$months = explode(", ", $_GET['months']);

	echo "<h2>Categories</h2>" . PHP_EOL . "<ul>";

	foreach ($categories as $category) {
		echo "<li>$category</li>" . PHP_EOL;
	}

	echo "</ul>" . PHP_EOL . "<h2>Tags</h2>" . PHP_EOL . "<ul>";

	foreach ($tags as $tag) {
		echo "<li>$tag</li>" . PHP_EOL;
	}

	echo "</ul>" . PHP_EOL . "<h2>Months</h2>" . PHP_EOL . "<ul>";

	foreach ($months as $month) {
		echo "<li>$month</li>" . PHP_EOL;
	}

	echo "</ul>";
}
?>