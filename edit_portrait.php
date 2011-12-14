<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Rézo Supélec</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
	    <link rel="stylesheet" media="screen" type="text/css" title="Design" href="css/base.css" />
			    <link rel="stylesheet" media="screen" type="text/css" title="Design" href="css/header.css" />

			<!--[if IE]>
      <link rel="stylesheet" type="text/css" href="css/base_ie.css" />
      <![endif]-->			
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /> 
		
	</head>
	
	<body>
	<div id="body">
	
		<?php include("header.html"); ?>
		
		<div id="corps">
			<div>			
			<h1>Modifier mon Portrait Page Pro</h1>	
			
<form method="POST" action="traiter.php">
<table>
<tr><td><label for="nom">Nom : </label></td><td><input name="nom" type="text" maxlength=50/></td></tr>
<tr><td><label for="prenom">Prénom : </label></td><td><input name="prenom" type="text" maxlength=50/></td></tr>
<tr><td><label for="promo">Promo : </label> </td><td>
       <select name="promo" id="promo">
	   <?php 
	   $annee=date('Y');
	   $mois=date('m');
	   if($mois<9){$promo_actu=$annee+2;}else{$promo_actu=$annee+3;}
	   echo '<option value="'.($promo_actu).'" selected="selected">'.($annee+3).'</option>';
		echo '<option value="'.($promo_actu-1).'" >'.($promo_actu-1).'</option>';
		echo '<option value="'.($promo_actu-2).'" >'.($promo_actu-2).'</option>';
		?>
       </select></td></tr>
<tr><td><label for="adresse">Adresse mail a laquelle te joindre</label></td><td><input name="adresse" type="email" /></td></tr>
<tr><td><label for="tel">Télephone</label></td><td><input name="tel" type="tel" /></td></tr>
<tr><td><label for="poste">Mon poste au rézo</label></td><td><input name="tel" type="text" /></td></tr>
<tr><td><label for="projets"> egfsdf df sfu  yu ufuy yiuy uyur uy yujyuyuLes projets auxquels j'ai participé</label></td><td><textarea name="projets"></textarea></td></tr>
</form>
			
		</div>	
			
		</div><!--Fin du corps -->
		
		
	</div>
	</body>
	
</html>

