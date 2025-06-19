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
        'app-tata-lolo' => [
            'title' => 'Application de suivi de mission',
            'description' => '... En cour de réalisation ...
                        Application à réaliser pour une amie revenue manager. Celle-ci permet d\'avoir un suivi des missions par hôtel + un dashboard par hôtel.',
            'detailed_description' => <<<EOT

                    ## Qu'est ce qu'un/e revenue manager ?
                    Un·e revenue manager est une personne qui aide les hôtels (ou d’autres entreprises) à gagner plus d’argent en gérant au mieux leurs prix et leurs réservations. Son travail consiste à analyser les ventes, la demande, et la concurrence pour décider, par exemple, à quel prix vendre les chambres chaque jour afin d’optimiser les revenus de l’hôtel. C’est un peu comme un·e chef d’orchestre des tarifs et des disponibilités pour que l’hôtel soit le plus rentable possible.

                    ## Besoin
                    Cette application part d'un besoin précis pour une revenue manager, dans ses missions quotidiennes. Elle aimerait avoir une meilleure vue d'ensemble de chaque hôtel dont elle a la charge, et aussi des missions lié à ceux-ci

                    ## Ce qui est prévu : 
                    - un tableau de bord par hôtel (CA, évolution de CA, missions, ...)
                    - suivis du temps passé par hôtel
                    - pouvoir visualiser/ajouter des missions
                    - classer les missions par catégories
                    - voir qui est assigné à une mission

                    ## Technologies
                    - React
                    - Laravel
                    EOT
        ]
    ];
}