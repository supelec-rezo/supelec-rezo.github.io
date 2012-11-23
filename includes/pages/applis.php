<h1 class="page-title"> Applications développées </h1>

<p>
  Vous trouverez sur cette page les projets de l'équipe de développement logiciel
  de l'association <a href="http://www.rez-gif.supelec.fr">Supélec Rézo</a>. Pour toute question,
  remarque, insulte, contactez Supélec Rézo sur sa <a href="mailto:rezo@rez-gif.supelec.fr">mailing-list</a>.
</p>

<div>
  <table id="apps-summary">
    <tr>
      <th>Nom du projet</th>
      <th>Dernière version</th>
      <th>Description</th>
    </tr>

    <tr>
      <td><a href="apps/#dhcpd-mysql">DHCPd MySQL</a></td>
      <td>Version 0.1 pour dhcpd-3.0.4 (09/04/2007)</td>
      <td>Ajout du support Mysql au serveur DHCP de l'ISC.</td>
    </tr>

    <tr>
      <td><a href="apps/#kettu">Kettu</a></td>
      <td>Utilisé en interne, pas encore disponible au public</td>
      <td>Système de gestion d'un réseau local.</td>
    </tr>

    <tr>
      <td><a href="apps/#phprdg">PHP RDG</a></td>
      <td>Version 0.22 (04/05/2008)</td>
      <td>Abstraction simple d'une base de données Mysql en PHP.</td>
    </tr>

    <tr>
      <td><a href="apps/#rezotask">RezoTask</a></td>
      <td>Développement en cours</td>
      <td>Outil collaboratif simple de gestion de tâches</td>
    </tr>

  </table>
</div>

<?php
  $applis_array = array();

  if($handle = opendir('applis')){

    while(($entry = readdir($handle)) !== false){

      // Skips directories
      if(is_dir($entry))
        continue;

      // Files in 'promo' shall be named after the promotion year: <promo>.php
      // We keep only the year part, and append it to our array.
      array_push($applis_array, $entry);
    }

    closedir($handle);
  }

  asort($applis_array);

  foreach($applis_array as $app){
    include('applis/'.$app);
  }
  unset($app);
?>