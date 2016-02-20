<!DOCTYPE html>

<?php
  session_start();
  $locales = array(
  	'fr_FR.utf8',
  	'en_US.utf8'
  );
  $locale = $locales[0];
  if(isset($_GET['locale'])) {
  	$_SESSION['locale'] = intval($_GET['locale']);
  } 
  if(isset($_SESSION['locale'])) {
  	$locale = $locales[$_SESSION['locale']];
  } 
  $result = putenv('LANG='.$locale);
  if($result === false)
    echo 'NOPE!!!!';
  $result = putenv('LC_ALL='.$locale);
  if($result === false)
    echo 'NOPE2!!!!';
  
  $domain='messages'; 
  bindtextdomain($domain, 'Locale');
  $result = bind_textdomain_codeset($domain, 'UTF-8');
  if($result === false)
    echo 'NOPE3!!!!';
  
  $result = textdomain($domain);
  if($result === false)
    echo 'NOPE4!!!!';

  setlocale(LC_MESSAGES, $locale);
  

  $pages = array(
    'accueil' => 'accueil.php',
    'historique' => 'historique.php',
    'membres' => 'membres.php',
    'matos' => 'matos.php',
    'apps' => 'applis.php',
    'contact' => 'contact.php',
  );
  $index = isset($_GET['p']) ? $_GET['p'] : 'accueil';
  $index = array_key_exists($index, $pages) ? $index : 'accueil';
  $page = $pages[$index];

  /* Limits the number of promotion years in the members menu */
  $menu_promo_limit = 5;
?>

<html lang="fr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <base href="http://localhost/" />

    <title>Supélec Rézo</title>

    <link rel="stylesheet" type="text/css" href="assets/stylesheets/master.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/menu.css" media="screen" />
	<!--[if lte IE 9]>
		<link rel="stylesheet" href="assets/stylesheets/ie.css" type="text/css" media="screen" />
	<![endif]-->

    <link rel="icon" type="image/png" href="assets/images/favicon.png" />

    <script type='text/javascript' src='assets/javascript/jquery-1.7.2.min.js'></script>
  </head>

  <body>
    <?php include('includes/header.php'); ?>

    <div id="wrapper">
      <div id="wrapper-left">
        <?php include('includes/menu.php'); ?>
      </div>

      <div id="wrapper-content">
        <?php include('includes/pages/'.$page); ?>
      </div>
    </div>

    <?php include ('includes/footer.php'); ?>
  </body>
</html>
