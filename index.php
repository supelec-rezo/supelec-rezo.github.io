<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
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

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <meta charset="utf-8" />
    
    <base href="http://www.rezomen.fr/" />

    <title>Supélec Rézo</title>

    <?php
      // Prevents robots from indexing members page.
      if($index == 'membres'){
        echo "<meta name='robots' content='noindex'>";
      }
    ?>

    <link rel="stylesheet" type="text/css" href="assets/stylesheets/master.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/menu.css" media="screen" />
	<!--[if lte IE 9]>
		<link rel="stylesheet" href="assets/stylesheets/ie.css" type="text/css" media="screen" />
	<![endif]-->

    <link rel="icon" type="image/png" href="assets/images/favicon.png"> 

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
