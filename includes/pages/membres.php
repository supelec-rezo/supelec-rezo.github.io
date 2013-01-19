<h1 class="page-title">Membres</h1>

<p>
  Cette page donne la liste des membres connus de Supélec Rézo depuis la création de l'association en 1991. <br />
  Les membres du bureau font également partie du Conseil d'Administration, créé par une refonte des statuts en 2008. L'appartenance au conseil d'administration commence en Février de l'année scolaire en cours ou après un vote du Conseil d'administration, et se termine au 30 Avril de l'année suivante.<br />
  Les années de promotion correspondent à l'année prévue de remise du diplôme.
</p>

<?php
  $promo_array = array();

  if($handle = opendir('promos')){
    
    while(($entry = readdir($handle)) !== false){
      
      // Skips directories
      if(is_dir($entry) || $entry === ".htaccess")
        continue;
      
      // Files in 'promo' shall be named after the promotion year: <promo>.php
      // We keep only the year part, and append it to our array.
      array_push($promo_array, $entry);
    }

    closedir($handle);
  }

  asort($promo_array);

  foreach(array_reverse($promo_array) as $promo){
    $split = explode('.', $promo);
    include('promos/'.$promo);
  }
  unset($promo);
?>
