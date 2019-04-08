<?php
// basic measure the speed of code
function startMeasure(){
	$start = microtime(true);
	return $start;
}
function stopMeasure($start){
	$stop = microtime(true);
	echo ($stop-$start) . " sec";
}

// start measure speed
$start = startMeasure();
echo 'start basic measure speed of code<br>';

// do stuff here...
sleep(5);

// stop measure speed
stopMeasure($start);
echo '<br>stop basic measure speed of code';
?>
