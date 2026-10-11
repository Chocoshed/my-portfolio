<?php

function get_all_french_project()
{
    return [
        'developper-battle' => [
            'title' => 'Developper Battle',
            'description' => 'Un petit jeu éducatif créé dans le cadre d\'un projet de BUT. Inspiré des jeux Pokémon !',
            'detailed_description' => <<<EOT
                            Le thème pour le jeux à créer était "initier à la programmation".

                            J'ai alors choisis de m'inspirer d'un jeu je mon enfance : Pokémon.

                            Dans ce jeux on peut découvrir les bases de la programation en commencant par connaître la base des languages du développement web, tel que : HTML, CSS, JS, PHP, SQL, ...

                            Pour le développement j'ai décidé de sortir de ma zone de confort, le choix du language était libre, mon choix s'est alors porté sur react.js.

                            J'ai aussi créé des gifs pour avoir rapidement et facilement des personnages animés, grace au site pixelart, [>ici<](https://www.pixilart.com/chocoshed/albums/game-378425) les gifs utilisés
                            EOT,
        ],
        'feffs' => [
            'title' => 'FEFFS - Application mobile',
            'description' => 'Application réalisé dans le cadre d\'un projet de BUT. Celle ci devait permettre de voir et réserver les séances de projection.',
            'detailed_description' => <<<EOT
            Cette application est un projet conçue pour offrir une expérience optimale aux festivaliers en leur permettant de gérer tous les aspects de leur participation au festival directement depuis leur smartphone.

            ## Gestion du compte

            Inscription et connexion des utilisateurs.
            Gestion complète du profil utilisateur.
            Possibilité d'extraire ses données personnelles (RGPD).

            ## Pass Festival

            Achat sécurisé de pass.
            Affichage du QR code pour une validation rapide.
            Gestion des informations associées au pass (nom, prénom, photo, etc.).

            ## Programme & Événements

            Consultation du programme journalier.
            Filtrage des événements par catégorie (Palmarès, Longs-métrages, Rétrospectives).
            Ajout et suppression d'événements au programme personnel.
            Planning personnalisé avec détection des chevauchements.

            ## Billetterie

            Achat de billets pour les événements.
            Informations détaillées sur les cinémas partenaires.
            Tarifs et avantages liés au pass festival.

            ## Fonctionnalités techniques

            Scanner de QR codes intégré.
            Mode clair/sombre pour un confort visuel optimal.
            Stockage local des données pour un accès hors-ligne.
            Synchronisation en temps réel avec le serveur.

            EOT,
        ],
        'gestion-des-absences' => [
            'title' => 'Application de scolarité',
            'description' => 'Application permettant de gérer les absences et consulter les promotions des étudiants par le personnel de l\'IUT. 
                        Application réalisé sur mes 2 années d\'alternance.',
            'detailed_description' => <<<EOT
                            
                    Cette application, une extension ajoutée à une application existante, permet au personnel de l'IUT concerné de gérer les absences et les étudiants.

                    ## Fonctionnalités principales :
                    - **Insérer des absences**
                    - **Insérer des justificatifs d'absences**
                    - **Visualiser les absences**
                    - **Voir les listes d'étudiants** (liste + trombinoscope)

                    ## Page synthèse des absences
                    La page la plus complexe du projet, que j'ai dû revoir plusieurs fois. Initialement développée uniquement en Twig, elle fonctionne maintenant entièrement en JavaScript (car React n'est pas utilisé dans le projet).
                    EOT,
        ],
        'pollution-tracker' => [
            'title' => 'Pollution Tracker',
            'description' => 'Application web full-stack de déclaration et de suivi des pollutions, développée avec Angular et une API REST Node.js. 
                        Réalisée dans le cadre d\'un projet de cours Angular.',
            'detailed_description' => <<<EOT
                            
                            Cette application permet aux utilisateurs de signaler les pollutions qu'ils observent (dépôts sauvages, plastique, eau, air, produits chimiques...), de consulter les signalements des autres utilisateurs et de suivre ceux qui les intéressent.
                            
                            ## Fonctionnalités principales :
                            - **Consulter les signalements** (liste sous forme de cartes + page de détail avec photo)
                            - **Recherche en temps réel** (RxJS, debounce de 300 ms)
                            - **Filtres combinables** (type, période, mes signalements, mes favoris)
                            - **Déclarer, modifier et supprimer une pollution** (seul l'auteur peut modifier ou supprimer ses propres signalements)
                            - **Favoris** (compteur dans l'en-tête, page dédiée, sauvegarde dans le localStorage)
                            - **Authentification** (inscription, connexion, déconnexion) et **gestion des utilisateurs**
                            
                            ## Front-end (Angular 20)
                            Développé avec des composants standalone et une architecture core / features / shared. L'état de l'application (authentification, pollutions, favoris) est centralisé avec **NGXS**. Les routes privées sont protégées par un guard, et un intercepteur HTTP ajoute le JWT aux requêtes et gère les sessions expirées. Le formulaire de déclaration utilise les **Reactive Forms** avec des validateurs personnalisés (coordonnées GPS, date, URL de la photo) et affiche un récapitulatif après l'envoi.
                            
                            ## Back-end (Node.js / Express)
                            Une API REST avec **Sequelize** sur **PostgreSQL**, sécurisée par **JWT** (cookie HTTP-only) et par le hashage des mots de passe avec **bcrypt**. L'API est conteneurisée avec **Docker** et déployée sur **Render** via un pipeline CI/CD **GitHub Actions**.
                            
                            ## Liste des pollutions
                            La partie la plus complexe du projet : la liste combine plusieurs flux de données (pollutions, recherche, filtres, favoris et utilisateur connecté) avec `combineLatest` de RxJS, ce qui met l'affichage à jour instantanément dès que l'un d'eux change.
                            EOT,
        ],
    ];
}