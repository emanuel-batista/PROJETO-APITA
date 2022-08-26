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
	//pegar 250 caracteres do conteúdo da notícia
	$posts[0]['CONTEUDO_NOTICIA'] = substr($posts[0]['CONTEUDO_NOTICIA'], 0, 250) . "...";
	
	return $posts;
}

//function getUserById
function getUserById($id){
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM usuario WHERE id_usuario=$id";
	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_assoc($result); // fetch query result as associative array
	return $user;
}

//função selecionar as 3 entrevistas mais recentes
function getPublishedPostsRecentEntrevista(){
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM entrevista ORDER BY id_entrevista DESC LIMIT 3";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$entrevistas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//pegar todo o conteúdo da entrevista
	$entrevistas[0]['CONTEUDO_ENTREVISTA'] = $entrevistas[0]['CONTEUDO_ENTREVISTA'];
	$entrevistas[1]['CONTEUDO_ENTREVISTA'] = $entrevistas[1]['CONTEUDO_ENTREVISTA'];
	$entrevistas[2]['CONTEUDO_ENTREVISTA'] = $entrevistas[2]['CONTEUDO_ENTREVISTA'];

	/* //pegar 250 caracteres do conteúdo da notícia
	$entrevistas[0]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[0]['CONTEUDO_ENTREVISTA'], 0, 1000) . "...";
	$entrevistas[1]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[1]['CONTEUDO_ENTREVISTA'], 0, 1000) . "...";
	$entrevistas[2]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[2]['CONTEUDO_ENTREVISTA'], 0, 1000) . "..."; */
	//pegar href com id da entrevista
	
	return $entrevistas;
}

//função selecionar as entrevistas mais antigas
function getPublishedPostsOldEntrevista(){
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM entrevista ORDER BY id_entrevista ASC";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$entrevistas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//pegar todo o conteúdo da entrevista

	/* //pegar 250 caracteres do conteúdo da notícia
	$entrevistas[0]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[0]['CONTEUDO_ENTREVISTA'], 0, 1000) . "...";
	$entrevistas[1]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[1]['CONTEUDO_ENTREVISTA'], 0, 1000) . "...";
	$entrevistas[2]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[2]['CONTEUDO_ENTREVISTA'], 0, 1000) . "..."; */
	//pegar href com id da entrevista
	
	return $entrevistas;
}


//função selecionar todas as entrevistas
function getPublishedPostsAllEntrevista(){
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM entrevista ORDER BY id_entrevista DESC";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$entrevistas = mysqli_fetch_all($result, MYSQLI_ASSOC);


	/* //pegar 250 caracteres do conteúdo da notícia
	$entrevistas[0]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[0]['CONTEUDO_ENTREVISTA'], 0, 1000) . "...";
	$entrevistas[1]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[1]['CONTEUDO_ENTREVISTA'], 0, 1000) . "...";
	$entrevistas[2]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[2]['CONTEUDO_ENTREVISTA'], 0, 1000) . "..."; */
	//pegar href com id da entrevista
	
	return $entrevistas;
}


//função pegar primeira entrevista para colocar no index
function getPublishedPostsFirstEntrevista(){
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM entrevista ORDER BY id_entrevista DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$entrevistas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//pegar todo o conteúdo da entrevista
	$entrevistas[0]['CONTEUDO_ENTREVISTA'] = $entrevistas[0]['CONTEUDO_ENTREVISTA'];
	/* //pegar 250 caracteres do conteúdo da notícia
	$entrevistas[0]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[0]['CONTEUDO_ENTREVISTA'], 0, 1000) . "...";
	$entrevistas[1]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[1]['CONTEUDO_ENTREVISTA'], 0, 1000) . "...";
	$entrevistas[2]['CONTEUDO_ENTREVISTA'] = substr($entrevistas[2]['CONTEUDO_ENTREVISTA'], 0, 1000) . "..."; */
	//pegar href com id da entrevista
	
	return $entrevistas;
}