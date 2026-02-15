🦅 Odin - Plateforme de Gestion de Ressources (V2)
Odin est une application web collaborative permettant de centraliser, organiser et partager des ressources numériques (liens). Conçue pour valider des compétences avancées en développement Backend avec Laravel, l'application respecte les principes SOLID (notamment SRP via une couche Services), une gestion fine des droits (RBAC) et une sécurisation optimale.

📑 Table des Matières
Contexte et Objectifs

Fonctionnalités Clés

Architecture Technique

Modèle de Données (MPD)

Installation et Configuration

Arborescence du Projet

🎯 Contexte et Objectifs
Ce projet a été réalisé dans le cadre de la certification "Développeur Web et Web Mobile". Il vise à valider la maîtrise de :

L'authentification et la sécurisation par Middlewares.

L'architecture MVC étendue avec des Services.

L'ORM Eloquent (Relations One-to-Many, Many-to-Many, Polymorphisme).

La gestion des autorisations via Policies et Gates.

Le déploiement sur environnement Linux.

🚀 Fonctionnalités Clés
🔐 Authentification & Sécurité (US-01, US-02)
Inscription et Connexion sécurisées.

Middleware CheckAccountStatus : Blocage automatique des utilisateurs dont le compte est désactivé (is_active = false).

Middleware CheckAccountRole : Protection des routes d'administration.

📚 Gestion des Ressources (US-03, US-04, US-05, US-10)
CRUD complet sur les Catégories et les Liens.

Système de Tags (Many-to-Many).

Soft Deletes : Suppression logique des ressources avec possibilité de restauration par l'admin.

Validation avancée des formulaires via Form Requests.

👥 Rôles & Permissions (US-07)
Système RBAC (Role-Based Access Control) avec 3 niveaux :

Admin : Accès total, gestion des utilisateurs, accès aux logs.

Editor : Gestion complète de ses propres ressources.

Viewer : Lecture uniquement.

🤝 Partage & Collaboration (US-08, US-12)
Partage de liens avec d'autres utilisateurs via une table pivot avec attributs (permissions : lecture ou édition).

Gestion des Favoris.

🔍 Recherche & Suivi (US-06, US-09, US-13)
Filtrage par catégorie et tags.

Activity Logs : Historique des actions critiques (création, modification, suppression) accessible à l'administrateur.

Notifications : Alertes lors d'un partage de lien.

🏗 Architecture Technique
Le projet suit une architecture stricte pour respecter le Single Responsibility Principle (SRP). La logique métier est déportée des contrôleurs vers des Services.

PHP
app/
├── Http/Controllers/   # Gestion des requêtes et réponses HTTP uniquement
├── Services/           # Logique métier (Business Logic)
├── Requests/           # Validation des données entrantes
├── Policies/           # Logique d'autorisation
└── Models/             # Représentation des données Eloquent
Technologies utilisées
Framework : Laravel 10/11

Base de données : MySQL 8.0

Frontend : Blade Components, Vanilla JS (Modales, AJAX), CSS personnalisé.

Build Tool : Vite.

🗄 Modèle de Données (MPD)
La base de données contient plus de 10 tables interconnectées :

Utilisateurs & Rôles : users, roles, role_user (pivot).

Ressources : categories, links.

Taxonomie : tags, link_tag (pivot).

Social : favorites (pivot), link_user (pivot partage avec droits).

Système : activity_logs.

🛠 Installation et Configuration
Prérequis
PHP 8.2+

Composer

MySQL

Node.js & NPM

Étapes d'installation
Cloner le dépôt

Bash
git clone https://github.com/ton-username/odin-v2.git
cd odin-v2
Installer les dépendances PHP et JS

Bash
composer install
npm install
Configuration de l'environnement
Dupliquez le fichier .env.example et renommez-le en .env. Configurez votre base de données :

Code snippet
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=odin_db
DB_USERNAME=root
DB_PASSWORD=
Générer la clé d'application

Bash
php artisan key:generate
Migrations et Seeders
Lancez les migrations et alimentez la base avec les données de test (Admin, Roles, etc.) :

Bash
php artisan migrate --seed
Note : Le DatabaseSeeder lance automatiquement AdminSeeder et RoleSeeder.

Lancer l'application

Bash
npm run build
php artisan serve
📂 Structure des dossiers (Extrait)
Odin V2/
├── app/
│   ├── Http/
│   │   ├── Controllers/    # Admin, Auth, Categories, Links, etc.
│   │   ├── Middleware/     # CheckAccountRole, CheckAccountStatus
│   │   └── Requests/       # Validation (LoginRequest, linkRequest...)
│   ├── Models/             # ActivityLog, Link, User...
│   └── Services/           # AdminServices, authServices, linksServices...
├── database/
│   ├── migrations/         # Définition du schéma SGBD
│   └── seeders/            # Jeux de données initiaux
├── resources/
│   ├── views/
│   │   ├── admin/          # Dashboard admin & logs
│   │   ├── components/     # Composants Blade réutilisables
│   │   ├── modales/        # Modales d'ajout/édition
│   │   └── layouts/        # Structures de pages
└── public/
    └── js/                 # Scripts JS (Gestion modales, events)
👤 Auteur
Hamza BOUCHIKHI

Projet réalisé dans le cadre de la formation Développeur Web.

Date de création : Février 2026.