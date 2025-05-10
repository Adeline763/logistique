## Application Web de Gestion Logistique

## Description

Cette application web, développée en PHP avec une interface Bootstrap, permet la gestion logistique d'une organisation. Elle offre des modules pour gérer les utilisateurs, employés, équipements et demandes, avec des fonctionnalités d'ajout, modification, suppression et visualisation des données.

## Fonctionnalités principales

- **Gestion des utilisateurs** : Ajout, édition, suppression et visualisation des utilisateurs.
- **Gestion des employés** : Ajout, édition, suppression et visualisation des employés, liés à des utilisateurs.
- **Gestion des équipements** : Ajout, édition, suppression et visualisation des équipements, associés à des utilisateurs.
- **Gestion des demandes** : Création, édition, suppression et suivi des demandes d'équipements par les employés.
- **Tableau de bord** : Vue synthétique des données principales, avec graphiques et tableaux.
- **Authentification** : (À compléter, sinon à prévoir)
- **Interface responsive** : Adaptée aux ordinateurs et mobiles grâce à Bootstrap.

## Structure du projet

- `dashboard.php` : Tableau de bord dynamique avec affichage des utilisateurs.
- `user.php`, `add_user.php`, `edit_user.php`, `supUser.php` : Gestion des utilisateurs.
- `employe.php`, `add_employe.php`, `edit_employe.php` : Gestion des employés.
- `equipements.php`, `add_equipement.php`, `edit_equipement.php` : Gestion des équipements.
- `demande.php`, `add_demande.php`, `edit_demande.php` : Gestion des demandes.
- `suppression.php` : Suppression d'éléments (utilisateurs, employés, équipements, demandes).
- `config/database.php` : Configuration de la connexion à la base de données MySQL.
- `css/` et `js/` : Feuilles de style et scripts JavaScript (Bootstrap, Chart.js, scripts personnalisés).

## Installation

1. **Prérequis** :
   - Serveur web (Apache, Nginx, etc.)
   - PHP >= 7.0
   - MySQL/MariaDB

2. **Configuration de la base de données** :
   - Créez une base de données nommée `logistique`.
   - Importez les tables nécessaires (non fournies ici, à adapter selon votre schéma).

3. **Configuration de l'application** :
   - Modifiez le fichier `config/database.php` si besoin (utilisateur, mot de passe, nom de la base).
   - Placez le projet dans le répertoire web de votre serveur (ex : `htdocs` pour XAMPP).

4. **Accès** :
   - Ouvrez votre navigateur à l'adresse correspondante (ex : `http://localhost/logistique/`).

## Utilisation

- Naviguez via le menu latéral pour accéder aux différents modules.
- Utilisez les boutons "Ajouter", "Editer" ou "Supprimer" pour gérer les données.
- Le tableau de bord affiche une synthèse des informations.

## Technologies utilisées

- PHP (backend)
- MySQL (base de données)
- Bootstrap 5 (frontend)
- Chart.js (graphiques)
- JavaScript

## Auteurs

- Le développeur-Encadreur : [Ir. Ahmad](https://github.com/Ahmadfils)
- Le développeur etudiant 1 : [Ms Adeline](https://github.com/Adeline763)
- Le développeur etudiant 2 : [Mr. Kelvin](https://github.com/Kelvin969)


