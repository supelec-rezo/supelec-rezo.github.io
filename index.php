<!DOCTYPE html>
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
<html>
  <head>
    <meta charset="utf-8" />
    

    <title>Supélec Rézo</title>

    <?php
      // Prevents robots from indexing members page.
      if($index == 'membres'){
        echo "<meta name='robots' content='noindex'>";
      }
    ?>

    <link rel="stylesheet" type="text/css" href="assets/stylesheets/master.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/menu.css" media="screen" />

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
