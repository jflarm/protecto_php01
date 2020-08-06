<?php  
	
	$connection = mysqli_connect('localhost', 'root', '', 'cine');
	$sql = 'select titulo from peliculas where titulo like "%'.$_POST['titulo'].'%"';
	$result = mysqli_query($connection, $sql);
	
	$response = [];
	while($data = mysqli_fetch_assoc($result)){
		array_push($response, $data);
	}

	echo json_encode(array('data'=>$response));