<h1> Bienvennue sur la it-akademy api </h1>

<p> Afin d'utiliser l'api veuillez suivre quelques étapes. Il va falloir tout d'abord télécharger le repo project qui est l'api en Laravel et le configurer correctement. Puis telecharger le repo Front afin d'éffectuer vos requête sur l'api depuis un site front </p>
<h2>Installation de l'api Laravel </h2>
<p>
Une fois le repo télécharger il va falloir le placer sur votre serveur virtuel, votre vagrant dans le dossier /var/www/html(rien ne vous l'empêche de le faire depuis votre machine client dans un dossier synchronisé).
Afin d'éviter un téléchargement interminable les fichiers vendor ne sont pas dans le repo project il va donc falloir ajouter ces dépendances de votre côté.
</p>
<h3>Composer et Vendor</h3>
<p>Il va falloir télécharger Composer à cette <a href="https://getcomposer.org/download/">adresse </a> et lancer les commandes dans votre terminal du côté de votre vagrant . Une fois cette étape effectué nous allons faire une dernière commande pour utiliser composer depuis n'importe quel dossier  sudo mv composer.phar /usr/local/bin/composer </p>
<p> Une fois cette commande effectuer nous allons nous placer dans notre dossier /var/www/html/project pour la suite des manipulations. Depuis ce dossier vous executerez la commande suivant composer install (ce qui installera automatiquement les dépendances manquantes grâce au fichier composer.json </p>
<h3>Configuration de votre vagrant</h3>
<p>Afin de pouvoir utiliser l'api il va falloir faire quelques configuration au niveau de votre vagrant: <br>
=> Modifier le fichier 000-default.conf avec la commande sudo nano /etc/apache2/sites-available/000-default.conf
Il faut remplacer 	
DocumentRoot en /var/www/html/project/public

Et ajouter

<Directory /var/www/html/project/public>
		Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
	</Directory>
<br>
=>Modifier le fichier envvars avec la commande  sudo nano /etc/apache2/envvars et modifier les deux 'www-data' par 'vagrant'
<br><br>
Après ces deux manipulations redemmarez votre serveur avec sudo service apache2 restart</p>
<h3>Créer votre DB</h3>
La database n'étant pas héberger afin d'avoir du contenu il va falloir créer la database dwm12 via Mysql et faire une migration des seed et des table créées dans le repo Project.
Pour faire la migration placez vous dans /var/www/html/project et faite cette commande php artisan migrate:fresh --seed

<h2>Utilisation de l'API avec POSTMAN</h2>
<p> Pour utiliser l'API il faudra télécharge <a href="https://www.getpostman.com/downloads/">POSTMAN</a> 
    Une fois ouverte l'application vous permettra d'utiliser différentes routes et méthode afin d'utiliser pleinement l'API

    Voici les différentes routes utilisables
    <img src="./Table_route_Api.png">
