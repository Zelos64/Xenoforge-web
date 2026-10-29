## Requirements
- composer
- scoop
  - symphony
  - symphony CLI
- PHP 8.4+

Execute these 2 commands regularly
symfony check:security
composer update

## Structure
- bin : console.php & phpunit.php
- config : Fichiers de configuration, packages et routes
- migrations : gitignore et Migrations Doctrine de la base de données (inutile pour l'instant)
- public : Point d’entrée de l’application (index.php) et assets publics
- src
  - Controller : Objets PHP
  - Entity (Model) : Objets PHP représentant la base de données
  - Repository : Classes de requêtage des entités
- templates : Templates Twig (base, ...)
- translations
- tests : Tests automatisés (bootstrap.php)
- var : Fichiers autogénérés par Symfony (cache, logs...)
- vendor : Librairies externes téléchargées via Composer
- .env : Fichier de configuration de l’environnement