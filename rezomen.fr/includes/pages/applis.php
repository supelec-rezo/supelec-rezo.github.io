<h1 class="page-title"><?php echo _('Applications développées'); ?> </h1>

<p>
  <?php echo _('Vous trouverez sur cette page les projets de l\'équipe de développement logiciel de l\'association <a href="http://www.rez-gif.supelec.fr">Supélec Rézo</a>'); ?>. <?php echo _('Pour toute question, remarque, insulte, contactez Supélec Rézo sur sa <a href="mailto:rezo@rez-gif.supelec.fr">mailing-list</a>.'); ?>
</p>

<div>
  <table id="apps-summary">
    <tr>
      <th><?php echo _('Nom du projet'); ?></th>
      <th><?php echo _('Dernière version'); ?></th>
      <th><?php echo _('Description'); ?></th>
    </tr>

    <tr>
      <td><a href="apps/#kettu">Kettu</a></td>
      <td><?php echo _('Utilisé en interne, pas encore disponible au public'); ?></td>
      <td><?php echo _('Système de gestion d\'un réseau local.'); ?></td>
    </tr>

    <tr>
      <td><a href="apps/#phprdg">PHP RDG</a></td>
      <td><?php echo _('Version'); ?> 0.22 (04/05/2008)</td>
      <td><?php echo _('Abstraction simple d\'une base de données Mysql en PHP.'); ?></td>
    </tr>
	
  	<tr>
  	  <td><a href="apps/#notifier">Notifier</a></td>
  	  <td><?php echo _('Développement en cours'); ?></td>
  	  <td><?php echo _('Outil de surveillance de serveurs de jeu'); ?></td>
  	</tr>
  	
  	<tr>
  	  <td><a href="apps/#rezoirclogs">RezoIrcLogs</a></td>
  	  <td><?php echo _('Version'); ?> 1.9</td>
  	  <td><?php echo _('Application web permettant de parcourir des logs IRC'); ?></td>
  	</tr>
  	
  	<tr>
  	  <td><a href="apps/#yoppi">Birdo</a></td>
  	  <td><?php echo _('Développement en cours'); ?></td>
  	  <td><?php echo _('Indexeur automatique de serveurs FTP'); ?></td>
  	</tr>

  </table>
</div>

<?php
  $applis_array = array();

  if($handle = opendir('applis')){

    while(($entry = readdir($handle)) !== false){

      // Skips directories
      if(is_dir($entry) || $entry === ".htaccess")
        continue;

      // Files in 'applis' shall be named after the application name: <apppli>.php
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
