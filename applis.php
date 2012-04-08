<h1> Applications développées </h1>
<p>Vous trouverez sur cette page les projets de l'équipe de développement logiciel
de l'association <a href="http://www.rez-gif.supelec.fr">Supélec Rézo</a>. Pour toute question,
remarque, insulte, contactez Supélec Rézo sur sa <a href="mailto:rezo@rez-gif.supelec.fr">mailing-list</a>.</p>

<div id="div_projets">
<table>
<tr>
  <th>Nom du projet</th>
  <th>Dernière version</th>
  <th>Description</th>
</tr>
<tr>
  <td><a href="#dhcpd-mysql">Dhcpd Mysql</a></td>
  <td>Version 0.1 pour dhcpd-3.0.4 (09/04/2007)</td>
  <td>Ajout du support Mysql au serveur DHCP de l'ISC.</td>
</tr>
<tr>
  <td><a href="#phprdg">PHP RDG</a></td>
  <td>Version 0.22 (04/05/2008)</td>
  <td>Abstraction simple d'une base de données Mysql en PHP.</td>
</tr>
<tr>
  <td><a href="#phpview">PHP View</a></td>
  <td>Version 0.12 (29/04/2008)</td>
  <td>Système de templates.</td>
</tr>
<tr>
  <td><a href="#php-trivial-mvc">PHP Trivial MVC</a></td>
  <td>Version 0.2 (04/05/2008)</td>
  <td>Exemple d'implémentation du pattern MVC en PHP.</td>
</tr>
<tr>
  <td><a href="#kettu">Kettu</a></td>
  <td>Pas encore disponible</td>
  <td>Système de gestion d'un réseau local.</td>
</tr>
</table>
</div>



<hr />
<a name="dhcpd-mysql"></a>
<h1>Dhcpd Mysql</h1>

<div class="projet_description"><p><b>Ajout du support Mysql au serveur DHCP de l'ISC.</b>
Le serveur DHCP de l'ISC (Internet Software Consortium) est l'un des plus utilisé,
mais il ne dispose pas du support pour Mysql. Notre patch permet au serveur d'aller
chercher ses données dynamiquement dans une base de données Mysql, sans qu'il y ait
besoin de recharger son fichier de configuration. Il est en production depuis avril
2007 sur notre réseau de 1200 postes et n'a jamais posé le moindre problème.
</p></div>

<p><table class="projet_tableau">
<tr>
  <td class="label">Licence :</td>
  <td>ISC <i>(idem. serveur)</i></td>
</tr>
<tr>
  <td class="label">Langage :</td>
  <td>C</td>
</tr>
<tr>
  <td class="label">Dernière version :</td>
  <td><a class="download" href="downloads/dhcpd-3.0.4-mysql-0.1.patch">Télécharger la version 0.1 pour dhcpd-3.0.4</a> (09/04/2007)</td>
</tr>
<tr>
  <td class="label">Documentation :</td>
  <td>Installation : <code>patch -p0 &lt; dhcpd-3.0.4-mysql-0.1.patch</code></td>
</tr>
<tr>
  <td class="label">Dépôt subversion :</td>
  <td>
  <a href="https://svn.rez-gif.supelec.fr/dhcpd-mysql-3.0.4">https://svn.rez-gif.supelec.fr/dhcpd-mysql-3.0.4</a><br />
  <div class="explications">La révision 1 correspond au serveur non-patché, les révisions supérieures aux modifications
  successives. Pour obtenir la dernière version de développement du patch, se placer dans le répertoire <code>trunk/</code>
  et exécuter <code>svn diff -r 1 > dhcpd-3.0.4-mysql.patch</code></div>
  </td>
</tr>
</table></p>



<hr />
<a name="phprdg"></a>
<h1>PHP RDG</h1>

<div class="projet_description"><p><b>Implémentation simple du patron de conception Row Data Gateway pour PHP.</b>
L'objectif de PHP RDG est de fournir une implémentation très simple pour réaliser
l'abstraction d'une table Mysql dans une classe PHP. Les fonctions habituelles
de communication avec la base de données sont factorisées, il n'y a plus qu'à
les inclure dans vos classes en les faisant hériter d'une classe de base.</p></div>

<p><table class="projet_tableau">
<tr>
  <td class="label">Licence :</td>
  <td>BSD 1999</td>
</tr>
<tr>
  <td class="label">Langage :</td>
  <td>PHP 5</td>
</tr>
<tr>
  <td class="label">Dernière version :</td>
  <td>
    Version 0.22 du 04/05/2008<br />
    <a class="download" href="downloads/phprdg-0.22.tar.gz">Telecharger au format tar.gz</a><br />
    <a class="download" href="downloads/phprdg-0.22.zip">Telecharger au format zip</a>
  </td>
</tr>
<tr>
  <td class="label">Documentation :</td>
  <td>Voir le fichier README</td>
</tr>
<tr>
  <td class="label">Dépôt subversion :</td>
  <td>
    <a href="https://svn.rez-gif.supelec.fr/phprdg">https://svn.rez-gif.supelec.fr/phprdg</a>
    <div class="explications">La dernière version de développement se trouve dans le répertoire <code>trunk/</code>.
    </div>
  </td>
</tr>
</table></p>




<hr />
<a name="phprdg"></a>
<h1>PHP View</h1>

<div class="projet_description"><p><b>Système de templates pour PHP.</b>
PHP View fournit une classe de base pour gérer les templates et les layouts de manière simple.</p></div>

<p><table class="projet_tableau">
<tr>
  <td class="label">Licence :</td>
  <td>BSD 1999</td>
</tr>
<tr>
  <td class="label">Langage :</td>
  <td>PHP 5</td>
</tr>
<tr>
  <td class="label">Dernière version :</td>
  <td>
    Version 0.12 du 29/04/2008<br />
    <a class="download" href="downloads/phpview-0.12.tar.gz">Telecharger au format tar.gz</a><br />
    <a class="download" href="downloads/phpview-0.12.zip">Telecharger au format zip</a>
  </td>
</tr>
<tr>
  <td class="label">Documentation :</td>
  <td>Voir le fichier README</td>
</tr>
<tr>
  <td class="label">Dépôt subversion :</td>
  <td>
    <a href="https://svn.rez-gif.supelec.fr/phpview">https://svn.rez-gif.supelec.fr/phpview</a>
    <div class="explications">La dernière version de développement se trouve dans le répertoire <code>trunk/</code>.
    </div>
  </td>
</tr>
</table></p>



<hr />
<a name="php-trivial-mvc"></a>
<h1>PHP Trivial MVC</h1>

<div class="projet_description"><p><b>Exemple d'implémentation du pattern MVC en PHP.</b>
Ce projet propose une manière d'organiser un projet PHP suivant le pattern MVC (Modèle Vue Contrôleur). Il inclut les deux sous-projets précédents :
<ul>
  <li><a href="#phprdg">PHP RDG</a> <i>(version 0.22)</i> pour la gestion des modèles</li>
  <li><a href="#phpview">PHP View</a> <i>(version 0.12)</i> pour la gestion des templates (génération des vues à partir des contrôleurs)</li>
</ul>
</p></div>

<p><table class="projet_tableau">
<tr>
  <td class="label">Licence :</td>
  <td>BSD 1999</td>
</tr>
<tr>
  <td class="label">Langage :</td>
  <td>PHP 5</td>
</tr>
<tr>
  <td class="label">Dernière version :</td>
  <td>
    Version 0.2 du 04/05/2008<br />
    <a class="download" href="downloads/php-trivial-mvc-0.2.tar.gz">Telecharger au format tar.gz</a><br />
    <a class="download" href="downloads/php-trivial-mvc-0.2.zip">Telecharger au format zip</a>
  </td>
</tr>
<tr>
  <td class="label">Documentation :</td>
  <td>Voir le fichier README</td>
</tr>
<tr>
  <td class="label">Dépôt subversion :</td>
  <td>
    <a href="https://svn.rez-gif.supelec.fr/php-trivial-mvc">https://svn.rez-gif.supelec.fr/php-trivial-mvc</a>
    <div class="explications">La dernière version de développement se trouve dans le répertoire <code>trunk/</code>.
    </div>
  </td>
</tr>
</table></p>





<hr />
<a name="kettu"></a>
<h1>Kettu</h1>

<div class="projet_description"><p><b>Système de gestion d'un réseau local.</b>
Il s'agit de l'ensemble de logiciels et de scripts que nous utilisons pour
administrer le réseau de la résidence. Le projet Kettu est developpé en interne,
essentiellement en Ruby. Il supporte : la gestion des switchs, du DNS, du DHCP,
du Firewall, les adhésions et la comptabilité, les comptes Web, FTP, mail et
les mailing-lists des adhérents, ...</p></div>

<p><table class="projet_tableau">
<tr>
  <td class="label">Licence :</td>
  <td><img src="gplv3.png" alt="GPL v3" title="GPL v3" /></td>
</tr>
<tr>
  <td class="label">Langages :</td>
  <td>Ruby / Ruby on Rails / PHP</td>
</tr>
<tr>
  <td class="label">Dernière version :</td>
  <td>Pas encore disponible pour le public</td>
</tr>
<tr>
  <td class="label">Documentation :</td>
  <td>Pas encore disponible</td>
</tr>
<tr>
  <td class="label">Dépôt subversion :</td>
  <td>Pas encore disponible pour le public</td>
</tr>
</table></p>

