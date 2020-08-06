
<?php  
	require_once './configs/config.php';
	require_once './configs/connection.php';

	$sql = 'select * from peliculas';
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


<script type="text/javascript">
	
	function buscar(){

		$.ajax({
		
			/* (1) Configuracion principal. */ 
			url: 'sync/search.php',
			type: 'POST',
			data: {
				titulo: $('#buscar').val()
			},
			/*------------------------------*/

			/*(2) En el caso de exito. */ 
			success: function(response){
				
				let result = JSON.parse(response)
				
				$('.listado-peliculas').html('')
				
				for (var i = 0; i < result.data.length; i++) {
					
					$('.listado-peliculas').append(result.data[i].titulo+'<br>')
				}
			},
			/*------------------------------*/

			/*(3) En el caso de error. */ 
			error: function( jqXHR, textStatus, errorThrown ){
				document.write(textStatus+' '+errorThrown)
			},
			/*------------------------------*/

			/*(4) Opcionales */ 
			
			//Cuando es completada la peticion.
			complete: function(){
				$('#imageLoader').remove()
			},
			/*------------------------------*/

			//Cuando es completada la peticion.
			beforeSend: function(){
				$('.result').html('<img id="imageLoader" src="https://media.tenor.com/images/965beb93fefb499a174d45bfcef23c30/tenor.gif">')
			}
		})

	}
	

	$('#buscar').on('keyup', function(e){
		if($(this).val() != '')
			buscar()

	})

</script>