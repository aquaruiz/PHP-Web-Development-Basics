<?php
spl_autoload_register();

$n = intval(readline());
$playlist = [];

for ($i=0; $i < $n; $i++) { 
	list($artist, $song, $length) = explode(";", readline());
	list($minutes, $seconds) = explode(":", $length);
	try{
		$nextSong = new Song($artist, $song, [intval($minutes), intval($seconds)]);
		echo "Song added." . PHP_EOL;
		$playlist[] = $nextSong;
	} catch (Exception $e){
		echo $e->getMessage() . PHP_EOL;
	}
}

echo "Songs added: " . count($playlist) . PHP_EOL;
echo "Playlist length: ";

$mins = 0;
$secs = 0;
$hours = 0;

foreach ($playlist as $song) {
	foreach ($song->getLength() as $key => $value) {
		if ($key == 'minutes') {
			$mins += $value;
		} elseif ($key == 'seconds') {
			$secs += $value;
		}
	}
}

$hours = intval($mins / 60 + $secs / 60 / 60);
$mins = $mins - intval($mins / 60) * 60 + intval($secs / 60) - intval($secs / 60 / 60) * 60 == 60 ? 0 : $mins - intval($mins / 60) * 60 + intval($secs / 60) - intval($secs / 60 / 60) * 60;
$secs = $secs % 60; 

$mins = str_pad($mins, 2, "0", STR_PAD_LEFT);
$secs = str_pad($secs, 2 , '0', STR_PAD_LEFT);

echo "{$hours}h {$mins}m {$secs}s";
// var_dump($secs);
?>