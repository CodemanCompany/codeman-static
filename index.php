<?php
$data = ( object ) [
	'description'	=>	null,
	'file'			=>	basename( $_SERVER[ 'SCRIPT_NAME' ] ),
	'title'			=>	null,
];

switch( $data -> file ) {
	case 'about-us.php':
		$data -> title = 'About Us';
		$data -> description = 'Description';
		break;
	
	default:
		$data -> title = 'Index';
		$data -> description = 'Description';
}	// end switch
?>
<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title><?php echo $data -> title;?></title>

		<?php include 'structure/head.php';?>
	</head>

	<body>
		<header><?php include 'structure/header.php';?></header>
		<nav><?php include 'structure/navigation.php';?></nav>
		<main><?php include 'structure/content/' . $data -> file;?></main>
		<footer><?php include 'structure/footer.php';?></footer>

		<?php include 'structure/scripts.php';?>
	</body>
</html>