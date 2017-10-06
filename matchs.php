<?php 
	
	$matchs = file_get_contents('http://livescore-api.com/api-client/scores/live.json?key=9H6xdruscW2gvOYm&secret=S7unYwSa5gRSY9T8RZF4raxD6AUCoSYh');

	echo $matchs;
 ?>