<?php
$data = ( object ) [
	'description'	=>	null,
	'file'			=>	explode( '/', trim( $_SERVER[ 'REQUEST_URI' ], '/' ) ),
	'title'			=>	null,
];

if( empty( $data -> file[ 0 ] ) )
	$data -> file[ 0 ] = 'index';

switch( $data -> file[ 0 ] ) {
	case 'about-us':
		$data -> title = 'About Us';
		$data -> description = 'Description';
		break;

	case 'index':
		$data -> title = 'Index';
		$data -> description = 'Description';
		break;
	
	default:
		header( 'HTTP/1.0 404 Not Found' );
		include '404.html';
		exit;
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
		<main><?php include 'structure/content/' . $data -> file[ 0 ] . '.php';?></main>
		<footer><?php include 'structure/footer.php';?></footer>

		<?php include 'structure/scripts.php';?>
	</body>
</html>