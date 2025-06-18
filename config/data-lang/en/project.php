<?php

function get_all_english_project()
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
            'detailed_description' => '',
        ],
        'gestion-des-absences' => [
            'title' => 'Application de scolarité',
            'description' => 'Application permettant de gérer les absences et consulter les promotions des étudiants par le personnel de l\'IUT. 
                        Application réalisé sur mes 2 années d\'alternance.',
            'detailed_description' => <<<EOT
                            Cette application, une extension ajouté à un application existante, permet au personnel de l'IUT concerné de gérer les absences et les étudiants.
                            Il y a plusieurs fonctionnalités : 
                                - insérer des absences
                                - insérer des justificatifs d'absences
                                - visualiser les absences
                                - voir les listes d'étudiants (liste + trombinoscope)

                            Page synthèse des absences : 
                            La page la plus complexe du projet, que j'ai du revoir plusieurs fois. Initiallement dévellopé uniquement en twig, fonctionne maintenant entièrement en javascript (car react n'est pas utilisé dans le projet)
                            EOT,
        ],
        'app-tata-lolo' => [
            'title' => 'Application de suivi de mission',
            'description' => '... En cour de réalisation ...
                        Application réalisé pour une amie revenue manager. Celle-ci permet d\'avoir un suivi des missions par hôtel + un dashboard par hotel.',
            'detailed_description' => ''
        ]
    ];
}
