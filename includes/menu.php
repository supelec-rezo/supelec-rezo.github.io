<?php
  // Function used to create #id name from the app file name
  function get_app_id_name($name){
    $words = explode(" ", strtolower($name));
    $result = implode('-', $words);

    return $result;
  }

  // Looks for file to include
  $promo_array = array();

  if($handle = opendir('promos')){

    while(($entry = readdir($handle)) !== false){

      // Skips directories
      if(is_dir($entry))
        continue;

      // Files in 'promo' shall be named after the promotion year: <promo>.php
      // We keep only the year part, and append it to our array.
      $split = explode('.', $entry);
      array_push($promo_array, $split[0]);
    }

    closedir($handle);
  }

  asort($promo_array);

  $applis_array = array();

  if($handle = opendir('applis')){

    while(($entry = readdir($handle)) !== false){

      // Skips directories
      if(is_dir($entry))
        continue;

      // Files in 'app' file shall be named after the promotion year: <app name>.php
      $split = explode('.', $entry);
      array_push($applis_array, $split[0]);
    }

    closedir($handle);
  }

  asort($applis_array);
?>

<div id="menu">
  <div id="nav">
    <ul>
      <li><a href="accueil/"><span>Présentation</span></a></li>

      <li><a href="historique/"><span>Historique</span></a></li>

      <li class="dropdown"><a href="membres/"><span>Membres</span></a>
          <ul>
              <?php
                // Prints the link for each promotion year.
                $i = 0;

                foreach(array_reverse($promo_array) as $promo){
                  if ($i < $menu_promo_limit){
                    echo "<li><a href='membres/#$promo'><span>Promotion $promo</span></a></li>";
                    $i++;
                  } else if ($i == $menu_promo_limit){
                    // We still include the 'promo' anchor so that the link works.
                    echo "<li><a href='membres/#$promo'><span>Promotions antérieures</span></a></li>";
                    $i++;
                  }
                }
                unset($promo);
              ?>
          </ul>
      </li>

      <li><a href="matos/"><span>Matériel</span></a></li>

      <li class="dropdown"><a href="apps/"><span>Applications</span></a>
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

      <li><a href="contact/"><span>Contact</span></a></li>

    </ul>
  </div>
</div>​