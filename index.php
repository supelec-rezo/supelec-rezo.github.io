<!DOCTYPE html>
<?php
	$pages = array(
		'accueil.php',
		'historique.php',
		'matos.php',
		'membres.php',
    'applis.php',
    'contact.php',
	);
	$index = isset($_GET['p']) ? $_GET['p'] : 0;
	$index = $index < count($pages) && $index >= 0 ? $index : 0;
	$page = $pages[$index];
?>
<html>
	<head>
		<title>Supélec Rézo</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	</head>
	<body>
		<?php include('header.php'); ?>
		<div id="content">
			<?php include($page); ?>
		</div>
	</body>
</html>
