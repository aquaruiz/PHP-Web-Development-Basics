<?php
if (isset($_REQUEST['text'])) {
	$words = preg_split("/\W+/", trim($_REQUEST['text']));
	$uppers = [];

	foreach ($words as $word) {
		$isupper = true;

		foreach (str_split($word) as $letter) {
			if (strtoupper($letter) != $letter) {
				$isupper = false;
				break;
			}
		}

		if ($isupper) {
			$uppers[] = $word;
		}
	}

	$uppers = array_filter($uppers, function ($a) {return $a != "";});
}
?>
<form>
    <textarea rows="10" name="text"></textarea><br>
    <input type="submit" value="Extract">
</form>
<?=implode(", ", $uppers)?>