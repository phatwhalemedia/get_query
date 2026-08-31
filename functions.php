<?php

if (!empty($_GET['query'])) {

	$searchQuery = htmlspecialchars($_GET['query']);

	echo ("<p>" . $searchQuery . "</p>");

} else {

	echo ("<p>No way</p>");

}

