<div id="dhcpd-mysql" class="app">
  <h1>DHCPd MySQL</h1>

  <div>
    <p>
      <b>Ajout du support Mysql au serveur DHCP de l'ISC.</b><br />
      Le serveur DHCP de l'ISC (Internet Software Consortium) est l'un des plus utilisé,
      mais il ne dispose pas du support pour Mysql. Notre patch permet au serveur d'aller
      chercher ses données dynamiquement dans une base de données Mysql, sans qu'il y ait
      besoin de recharger son fichier de configuration. Il est en production depuis avril
      2007 sur notre réseau de 1200 postes et n'a jamais posé le moindre problème.
    </p>
  </div>

  <table class="app-table">
    <tr>
      <th class="label">Licence :</th>
      <td>ISC <i>(idem. serveur)</i></td>
    </tr>
    <tr>
      <th class="label">Langage :</th>
      <td>C</td>
    </tr>
    <tr>
      <th class="label">Dernière version :</th>
      <td><a class="download" href="downloads/dhcpd-3.0.4-mysql-0.1.patch">Télécharger la version 0.1 pour dhcpd-3.0.4</a> (09/04/2007)</td>
    </tr>
    <tr>
      <th class="label">Documentation :</th>
      <td>Installation : <code>patch -p0 &lt; dhcpd-3.0.4-mysql-0.1.patch</code></td>
    </tr>
    <tr>
      <th class="label">Dépôt Mercurial :</th>
      <td>
        <a href="https://hg.rez-gif.supelec.fr/dhcpd-mysql">https://hg.rez-gif.supelec.fr/dhcpd-mysql</a><br />

        <div class="explications">
          La révision 1 correspond au serveur non-patché, les révisions supérieures aux modifications
          successives. Pour obtenir la dernière version de développement du patch, se placer dans le répertoire de votre choix
          et exécuter <code>hg clone http://hg.rez-gif.supelec.fr/dhcpd-mysql/</code>
        </div>
      </td>
    </tr>
  </table>

</div>
