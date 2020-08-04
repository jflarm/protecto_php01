
<?php  
	require_once './configs/config.php';
	require_once './configs/connection.php';

	$sql = 'select * from posts';
	$result = mysqli_query($connection, $sql);
	$data = mysqli_fetch_assoc($result);

	echo '<pre>';
	print_r($data);
	echo '</pre>';
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
		if(isset($_GET['page']) and $_GET['page'] == 'contact'){
			include(PATH_PROYECT.'/pages/contact.php');
		}

		else if(isset($_GET['page']) and $_GET['page'] == 'about'){
			include(PATH_PROYECT.'/pages/about.php');
		}

		else{
			echo '<h1>Estas en el home</h1>';
		}

		
	?>
</body>

</html>