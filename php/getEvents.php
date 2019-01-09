<?php
	$events = file_get_contents("data/events.json");
	$events = json_decode($events, true);
?>