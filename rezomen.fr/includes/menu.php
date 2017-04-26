<?php
  // Function used to create #id name from the app file name
  function get_app_id_name($name){
    $words = explode(" ", strtolower($name));
    $result = implode('-', $words);
    return $result;
  }

  // Looks for file to include
  $promo_array = array();
  $promo_files = glob('promos/*.php');

  foreach($promo_files as $file) {
    $promo_array[] = substr($file, 7, 4); // we keep only the year
  }
  rsort($promo_array);

  $applis_array = array();

  $applis_array = array();
  $applis_files = glob('applis/*.php');

  foreach($applis_files as $file) {
    $file = substr($file, 7);
    $applis_array[] = substr($file, 0, strpos($file, '.')); // we keep only the name
  }
  sort($applis_array);
?>

<div id="menu">
  <div id="nav">
    <ul>
      <li><a href="accueil/"><span><?php echo _('Présentation');?></span></a></li>

      <li><a href="historique/"><span><?php echo _('Historique');?></span></a></li>

      <li class="dropdown"><a href="membres/"><span><?php echo _('Membres');?></span></a>
          <ul>
              <?php
                // Prints the link for each promotion year.
                foreach($promo_array as $i => $promo){
                  if ($i < $menu_promo_limit){
                    echo "<li><a href='membres/#promo$promo'><span>"._('Promotion')." $promo</span></a></li>";
                  } else if ($i == $menu_promo_limit){
                    // We still include the 'promo' anchor so that the link works.
                    echo "<li><a href='membres/#promo$promo'><span>"._('Promotions antérieures')."</span></a></li>";
		    break;
                  }
                }
                unset($promo);
              ?>
          </ul>
      </li>

      <li><a href="matos/"><span><?php echo _('Matériel');?></span></a></li>

      <li class="dropdown"><a href="apps/"><span><?php echo _('Applications');?></span></a>
          <ul>
              <?php
                // Prints the link for each app.
                foreach($applis_array as $app){
                  $id = get_app_id_name($app);
                  echo "<li><a href='apps/#$id'><span>$app</span></a></li>";
                }
                unset($app);
              ?>
          </ul>
      </li>

      <li><a href="contact/"><span><?php echo _('Contact');?></span></a></li>

    </ul>
  </div>
</div>
