Création du repo
    Ajout du .gitignore automatique pour Symfony

## Requirements
- composer
- scoop
  - symphony
  - symphony CLI
- PHP 8.4+

## Installation
Etapes en vrac

Symphony CLI
```
symfony new Xenoforge-web --webapp
```

``` Composer
composer require symfony/console
composer create-project symfony/skeleton:"8.1.*" <project-name>
composer require webapp
symfony check:requirements
```
Démarrer les services Docker
```
docker compose up
```
Créer la base de données
```
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```
Démarrer le serveur PHP
```
symfony serve
composer create-project symfony/skeleton .
composer require webapp
```
recup readme du projet de cours

