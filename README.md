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
symfony check:requirements
composer require --dev symfony/profiler-pack
```

# Structure du projet
- bin : Fichiers exécutables (plus particulièrement console)
- config : Fichiers de configuration
- migrations : Migrations Doctrine de la base de données
- public : Point d’entrée de l’application (index.php) et assets publics
- src
- - Controller : Objets PHP
- - Entity (Model) : Objets PHP représentant la base de données
- - Repository : Classes de requêtage des entités
- templates : Templates Twig
- tests : Tests automatisés
- var : Fichiers autogénérés par Symfony (cache, logs...)
- vendor : Librairies externes téléchargées via Composer
- .env : Fichier de configuration de l’environnement