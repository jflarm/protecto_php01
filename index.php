
<?php  
	require_once './configs/config.php';
	require_once './configs/connection.php';

	$sql = 'select * from posts';
	$result = mysqli_query($connection, $sql);
	$data = mysqli_fetch_assoc($result);

	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	
?>


<!DOCTYPE html>
<html lang="es">


<?php  
	include(PATH_PROYECT.'/components/head.php');
?>

<body>
	<?php 

		// Inclucion de codigo estatico...
		include(PATH_PROYECT.'/components/header.php');

		// Inclucion dinamica de codigo...
		if(isset($_GET['page'])){
		
			if($_GET['page'] == 'contact'){
				include(PATH_PROYECT.'/pages/contact.php');
			}

			else if($_GET['page'] == 'about'){
				include(PATH_PROYECT.'/pages/about.php');
			}

			else if($_GET['page'] == 'add_movies'){
				include(PATH_PROYECT.'/pages/add_movies.php');
			}
			
			else if($_GET['page'] == 'movie_list'){
				include(PATH_PROYECT.'/pages/movie_list.php');
			}
		}
		else{
			include(PATH_PROYECT.'/pages/movie_list.php');
			// echo '<h1>Estas en el home</h1>';
		}

		
	?>
</body>

</html>