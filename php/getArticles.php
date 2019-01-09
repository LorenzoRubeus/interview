<?php
	$articles = file_get_contents("data/articles.json");
	$articles = json_decode($articles, true);
?>