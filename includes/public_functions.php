<?php
function getPublishedPosts(){
    // use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM noticia";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}