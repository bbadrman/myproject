# Portfolio Project

Ce projet est un portfolio personnel développé avec **Symfony 7.4** et **React** (via AssetMapper).

## Prérequis

- **PHP** >= 8.2
- **Composer**
- **Symfony CLI** (recommandé) ou serveur PHP intégré
- **SQLite** (pour la base de données locale)

## Installation

1.  **Cloner le projet** :
    ```bash
    git clone <url_du_repo>
    cd my-portfolio
    ```

2.  **Installer les dépendances** :
    ```bash
    composer install
    ```

3.  **Configurer la base de données** :
    Le projet utilise SQLite par défaut.
    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

## Démarrage

### Backend & Frontend

Le frontend étant géré par Symfony (AssetMapper), il suffit de lancer le serveur Symfony :

Si vous avez la Symfony CLI :
```bash
symfony serve -d
```

Sinon, utilisez le serveur interne de PHP :
```bash
php -S 127.0.0.1:8000 -t public
```

L'application sera accessible sur [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Administration

Le panneau d'administration est accessible via l'URL :
[http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)

> **Note** : Actuellement, aucune authentification n'est configurée pour l'accès administrateur en environnement de développement.

## Structure du projet

- `assets/` : Fichiers statiques et contrôleurs Stimulus/React.
- `src/Controller/` : Contrôleurs Symfony (dont l'Admin Dashboard).
- `src/Entity/` : Entités Doctrine (Project, Skill, etc.).
- `templates/` : Vues Twig.
