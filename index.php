<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title></title>

		<meta charset="utf-8" />

		<?php include 'structure/head.php';?>
	</head>

	<body>
		<header><?php include 'structure/header.php';?></header>
		<nav><?php include 'structure/navigation.php';?></nav>
		<main><?php include 'structure/content/' . basename( $_SERVER[ 'SCRIPT_NAME' ] );?></main>
		<footer><?php include 'structure/footer.php';?></footer>

		<?php include 'structure/scripts.php';?>
	</body>
</html>