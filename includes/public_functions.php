<?php


/* function getPublishedPosts(){
    // use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM noticia";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
} */

//função selecionar notícia mais recente
function getPublishedPostsRecent(){
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM noticia ORDER BY id_noticia DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}