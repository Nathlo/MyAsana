# My.Asana

My.Asana est une application web de gestion des tâches conçue pour les petites équipes au sein des PME. Elle permet de gérer efficacement les employés, les projets, et les tâches associées, le tout dans une interface simple et intuitive.
---

## Installation :

### Prérequis

- PHP 8.x ou supérieur
- Composer
- Serveur web (Apache, Nginx, etc.)
- MySQL ou tout autre base de données supportée par Laravel
 - Node.js et npm (pour la gestion des assets front-end)

---
### Étapes d'installation :

1. Cloner le dépôt
Clonez le dépôt GitHub de My.Asana sur votre machine locale.

2. Installer les dépendances
Installez les dépendances PHP via Composer.
Installez les dépendances JavaScript et compilez les assets front-end.

3. Configurer l'environnement
Copiez le fichier .env.example en .env et configurez-le selon votre environnement (base de données, mail, etc.).
Générez une clé d'application Laravel.

4. Configurer la base de données
Mettez en place votre base de données MySQL et configurez les informations de connexion dans le fichier .env.
Puis, exécutez les migrations pour créer les tables nécessaires.

5. Lancer l'application

L'application sera accessible à l'adresse suivante : http://localhost:8000.

## Fonctionnalités principales

### Modèles et gestion des données

L'application repose sur quatre principaux modèles :

- User : Gestion des utilisateurs de l'application, avec des rôles et permissions spécifiques.
- Employee (Employé) : Gestion des informations des employés de la PME.
- Project (Projet) : Gestion des projets, incluant la création, l'attribution managériale, la mise à jour et la suppression.
- Task (Tâche) : Gestion des tâches associées à un projet, incluant la création, l'attribution, la mise à jour de l'état d'avancement et la suppression.


### Fonctionnalités CRUD

- Employés : Ajout, modification, suppression et affichage des employés.

- Projets : Création, modification, suppression et affichage des projets.

- Tâches : Ajout, modification, suppression et visualisation des tâches pour chaque projet.

### Authentification et gestion des utilisateurs

L'application inclut un système d'authentification complet basé sur Laravel avec des rôles pour les utilisateurs, permettant de restreindre l'accès à certaines parties de l'application en fonction des droits d'utilisateur.

### Notifications et gestion des priorités

Les utilisateurs sont notifiés lorsqu'une tâche leur est assignée ou lorsque son statut change. Chaque tâche peut être priorisée pour permettre une meilleure gestion des urgences.


## Structure de l'application

L'application suit la structure MVC (Model-View-Controller) propre à Laravel :

- Modèles : Les modèles se trouvent dans app/Models. Ils représentent les entités de l'application (User, Employee, Project, Task).

- Contrôleurs : Les contrôleurs gèrent la logique de l'application et se trouvent dans app/Http/Controllers. Ils orchestrent les requêtes utilisateurs et interagissent avec les modèles pour renvoyer des vues ou des réponses JSON.

- Vues : Les vues, qui se trouvent dans resources/views, contiennent le code HTML de l'application. Laravel Blade est utilisé comme moteur de template.

- Routes : Les routes sont définies dans routes/web.php pour l'interface utilisateur et routes/api.php pour les API REST, si elles sont présentes.


## Contribution

Les contributions sont les bienvenues ! N'hésitez pas à créer des issues ou des pull requests pour proposer des améliorations ou signaler des bugs.

## Licence

Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus de détails.