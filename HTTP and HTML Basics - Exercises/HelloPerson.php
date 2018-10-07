<?php
if (isset($_GET['person']) && !empty($_GET['person'])) {
	$name = htmlspecialchars($_GET['person']);
	echo "Hello, $name!";
} else {
	echo "<form method='get'>
		Name: <input type='text' name='person' />
		<input type='submit' name='Enter' />
	</form>";
}
?>