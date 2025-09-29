# dont-hack-me Drupal Intranet

---- DO NOT DOWNLOAD, DO NOT REUSE, DO NOT EXECUTE ---- 

Présentation
Prérequis
Installation
Configuration
Modules et fonctionnalités
Thème et personnalisation
Sécurité
Mise à jour
Sauvegarde & restauration
Contribution
Support et contacts
Licence
Présentation
Ce dépôt contient le code source de votre site intranet développé sous Drupal (version 9 ou 10).

L’objectif est de fournir un espace collaboratif interne, sécurisé et personnalisé pour la gestion de contenus, d’actualités et de documents au sein de votre organisation.

Prérequis
Serveur

• Apache 2.4+ ou Nginx 1.18+

• PHP 7.4+ (PHP 8.0+ recommandé)

• MySQL 5.7+ / MariaDB 10.3+ ou PostgreSQL 10+

• Composer

• Drush (facultatif, mais recommandé)

Extensions PHP requises

• php-xml

• php-gd ou php-imagick

• php-mbstring

• php-json

• php-curl

• php-pgsql (si PostgreSQL)

• php-mysql (si MySQL/MariaDB)

Installation
Clone du dépôt :

git clone https://votre-repo/antra-net-intranet.git

Se placer dans le dossier :

cd antra-net-intranet

Installer les dépendances via Composer :

composer install --no-dev --optimize-autoloader

Copier le fichier de configuration env :

cp web/sites/default/default.settings.php web/sites/default/settings.php

cp web/sites/default/default.services.yml web/sites/default/services.yml

Ajuster les permissions :

chmod u+w web/sites/default/settings.php

chmod -R u+w web/sites/default/files

Configuration

Base de données

• Créez votre base :

– MySQL :

CREATE DATABASE intranet CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

– PostgreSQL :

CREATE DATABASE intranet;

• Modifiez web/sites/default/settings.php pour renseigner vos accès BD.

Installation de Drupal

• Via Drush :

drush site:install standard --db-url=mysql://user:pass@localhost/intranet --site-name="Intranet"

• Ou via l’installateur web : roulez https://votre-domaine/install.php

Configurations additionnelles

• Mettre en place HTTPS (certificat SSL)

• Configurer la politique de mots de passe

• Activer la maintenance pendant la mise en place (mode maintenance)

Modules et fonctionnalités
Modules principaux

• Admin Toolbar – navigation améliorée

• Pathauto – alias d’URL automatiques

• Redirect – gestion des redirections

• Token – variables globales

• Webform – formulaires de contact/interne

• Views – affichages personnalisés

• CKEditor + Media – gestion de contenu riche et médias

• SimpleSAMLphp Auth – authentification fédérée SSO

• Features – export de configuration en module

• Devel – outils de développement (à désactiver en production)

Fonctionnalités clés

• Annuaire du personnel

• Espace document partagé

• Actualités & blog interne

• Système de notifications par courriel

• Workflow de validation de contenus (Workflows & Content Moderation)

• Recherche avancée (Solr/ Search API)

Thème et personnalisation
• Basé sur un sous-thème Bootstrap 5 (dossier : web/themes/custom/intranet_theme)

• Variables Twig personnalisées

• Assets gérés via libraries yml

• Compilations SCSS/JS avec Gulp ou Webpack (voir gulpfile.js / webpack.config.js)

Sécurité
• Désactivez le mode développement (twig_debug, cache disabled)

• Bloquez l’accès aux répertoires sensibles via .htaccess ou règles Nginx

• Mettez à jour régulièrement Drupal core et modules contrib

• Mettre en place un WAF (ex : ModSecurity)

• Paramétrez Content Security Policy (CSP) via le module Security Kit

• Limitez les rôles et permissions

Mise à jour
Via Composer :

• composer update drupal/core "drupal/*" --with-dependencies

• drush updatedb

• drush cache:rebuild

Testez en environnement de staging avant déploiement en production.

Sauvegarde & restauration
Sauvegarde base de données :

• mysqldump ou pg_dump

Sauvegarde fichiers :

• TAR du dossier web/sites/default/files

Restauration inverse selon le même procédé.

Contribution
Forkez le dépôt
Créez une branche feature/bugfix (git checkout -b feature/ma-fonction)
Commitez vos changements (git commit -m "Ajout de…")
Poussez votre branche (git push origin feature/ma-fonction)
Ouvrez une Pull Request
Merci de suivre la charte de code Drupal (PSR-12, Drupal Coding Standards).

Support et contacts
• Responsable projet : sjouedestours@gmail.com

• Canal Slack/Teams : #intranet-support

• Documentation interne : https://intra-docs.donthackme.com/drupal

Licence
Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus de détails.
