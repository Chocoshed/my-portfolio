<?php

function get_all_english_project()
{
    return [
        'developper-battle' => [
            'title' => 'Developer Battle',
            'description' => 'A small educational game created as part of a BUT project. Inspired by Pokémon games!',
            'detailed_description' => <<<EOT
                            The theme for the game to create was "introduce programming".
                            
                            I chose to draw inspiration from a game from my childhood: Pokémon.
                            
                            In this game, players can discover the basics of programming, starting with understanding the foundation of web development languages such as: HTML, CSS, JS, PHP, SQL, ...
                            
                            For development, I decided to step out of my comfort zone. The language choice was free, so I went with React.js.
                            
                            I also created gifs to have quickly and easily animated characters, thanks to the pixelart site, [>here<](https://www.pixilart.com/chocoshed/albums/game-378425) are the gifs I used
                            EOT,
        ],
        'feffs' => [
            'title' => 'FEFFS - Mobile Application',
            'description' => 'Application created as part of a BUT project. It was designed to allow viewing and booking film screening sessions.',
            'detailed_description' => '',
        ],
        'gestion-des-absences' => [
            'title' => 'School Management Application',
            'description' => 'Application for managing student absences and viewing student cohorts by IUT staff. 
                        Developed during my 2 years of apprenticeship.',
            'detailed_description' => <<<EOT
                            
                            This application, an extension added to an existing application, allows relevant IUT staff to manage absences and students.
                            
                            ## Main features:
                            - **Record absences**
                            - **Submit absence justifications**
                            - **View absences**
                            - **View student lists** (list + photo directory)
                            
                            ## Absence summary page
                            The most complex page of the project, which I had to revise several times. Initially developed solely in Twig, it now works entirely in JavaScript (as React is not used in the project).
                            EOT,
        ],
        'app-tata-lolo' => [
            'title' => 'Mission Tracking Application',
            'description' => '... Currently in development ...
                        Application created for a friend who works as a revenue manager. It provides mission tracking by hotel + a dashboard for each hotel.',
            'detailed_description' => ''
        ]
    ];
}
