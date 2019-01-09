<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="icon" href="images/logo16x16.png" type="image/png" sizes="16x16">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
		<title>Events</title>
	</head>
	<body>
		<header>
			<span id="contentHeader">
				<img id="logo" src="images/logo.png" alt="logo"/>
			</span>
		</header>
		<div id="container">
			<div id="div_articles">
				<div id="headerArticles">Articles</div>
				<div id="div_groupArticles">
					<?php
					  require("php/getArticles.php");
					  $count = 0;

					  foreach ($articles as $article) {
				  		echo "<article class='div_singleArticle' id='$count'>";
						  	echo "<a href=".$article['url']."><p class='titleArticle'>".$article['title']."</p></a>";
						  	echo "<label class='label_author'>By </label><a href='#' class='link_nameAuthor'>".$article['author']."</a>";
						  	echo "<br/>";
				  			echo "<img class='img_articles' src=".$article['image']." alt='Image Article'>";
				  			echo "<div class=div_textArticle>";
				  				echo "<p class='text_article'>".$article['content']."</p>";
				  			echo "</div>";
				  		echo "</article>";
				  		$count++;
					  }
					?>
				</div>
			</div>
			<div id="div_events">
				<div id="headerEvents">Events</div>
				<?php
					require("php/getEvents.php");

					foreach ($events as $event) {

						echo "<div class='div_singleEvent' id=event_".$event['id'].">";
							echo "<div class='containerEvent'>";
								echo "<a href=".$event['url']."><p class='nameEvent'>".$event['title']."</p>";
								echo "<p class='locationEvent'><label class='label_DescriptionEvent'>Location - </label>".$event['location']."</p>";
								echo "<p class='dateEvent'><label class='label_DescriptionEvent'>Date - </label>".$event['date']." at ".$event['time']."</p></a>";
								echo "<a href='#' class='showMap' onclick=getLocations(".$event['geo']['lat'].",".$event['geo']['lng'].")>Show Map</a>";
							echo "</div>";
						echo "</div>";
					}
				?>
			</div>
		</div>

		<div id="googleMap"></div>
		<div id="overlay">
			<img src="images/close.png" id="closeImg">
			<h3 id="h3Overlay">Or press ESC to go back.</h3>
		</div>

		<script type="text/javascript" src="js/googleMap.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiejFwnZ9JuaWO4rYBEzTfn64rYeYO47Q"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>