<?php  
	require_once '../configs/config.php';
?>
<style>
	header{
		height: 100px;
		background-color: lightblue;
		color: #fff;
	}
</style>
<header>
	<nav>
		<?php include(PATH_PROYECT.'/components/menu.php'); ?>
	</nav>
	<input type="text" id="buscar">
</header>