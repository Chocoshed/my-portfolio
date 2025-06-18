# Site Web Portfolio

Il s'agit d'un site web portfolio personnel présentant des projets, des compétences et une expérience professionnelle. Le site est multilingue, prenant en charge le français, l'allemand et l'anglais.

## Fonctionnalités

- **Support multilingue** : Le contenu est disponible en français, allemand et anglais.
- **Design réactif** : Optimisé pour les appareils de bureau et mobiles.
- **Contenu dynamique** : Les projets et expériences sont chargés dynamiquement à partir de fichiers de configuration.
- **Interface épurée** : Design moderne et minimaliste.

## Structure du projet

- **`config/`** : Contient les fichiers de données spécifiques à chaque langue pour le support multilingue.
- **`assets/css/`** : Feuilles de style du site, incluant `style.css` et `style.scss`.
- **`partials/`** : Composants réutilisables comme l'en-tête et le pied de page.
- **`index.php`** : Point d'entrée principal du site.
- **`project-detail.php`** : Affiche les informations détaillées sur un projet spécifique.

## Installation

1. Clonez le dépôt :
    ```bash
    git clone https://github.com/your-username/portfolio.git
    ```
2. Accédez au dossier du projet :
     ```bash
     cd portfolio
     ```
3. Installez les dépendances avec Composer :
     ```bash
     composer install
     ```

## Technologies utilisées
- Frontend : HTML, CSS (SCSS), JavaScript
- Backend : PHP
- Analyseur Markdown : Parsedown