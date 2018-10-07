<?php
if (isset($_REQUEST['lines'])) {
	$lines = explode("\n", trim($_REQUEST['lines']));
	sort($lines);
	$sortedLines = implode("\n", $lines);
}
?>
<form>
  <textarea rows="10" name="lines"><?=$sortedLines ?>
  </textarea> <br>
  <input type="submit" value="Sort">
</form>