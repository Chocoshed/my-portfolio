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
            'detailed_description' => <<<EOT
            This application is a project designed to offer festival-goers an optimal experience by allowing them to manage all aspects of their festival participation directly from their smartphone.

            ## Account Management

            User registration and login.
            Full user profile management.
            Ability to export personal data (GDPR compliance).

            ## Festival Pass

            Secure purchase of passes.
            Display of QR code for quick validation.
            Management of information associated with the pass (name, surname, photo, etc.).

            ## Program & Events

            Viewing the daily schedule.
            Filtering events by category (Awards, Feature Films, Retrospectives).
            Adding and removing events to/from the personal schedule.
            Personalized planning with overlap detection.

            ## Ticketing

            Purchase of tickets for events.
            Detailed information about partner cinemas.
            Prices and benefits related to the festival pass.

            ## Technical Features

            Integrated QR code scanner.
            Light/dark mode for optimal visual comfort.
            Local data storage for offline access.
            Real-time synchronization with the server.

            EOT,
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
            'detailed_description' => <<<EOT

                    ## What is a revenue manager?
                    A revenue manager is someone who helps hotels (or other businesses) earn more money by optimally managing their prices and bookings. Their job is to analyze sales, demand, and competition to decide, for example, at what price to sell rooms each day in order to optimize the hotel's revenue. It's a bit like being a conductor for rates and availability so that the hotel is as profitable as possible.

                    ## Need
                    This application arises from a specific need for a revenue manager in their daily tasks. They would like to have a better overview of each hotel they are responsible for, as well as the tasks related to them.

                    ## Planned features:
                    - a dashboard for each hotel (revenue, revenue trends, tasks, ...)
                    - tracking time spent per hotel
                    - ability to view/add tasks
                    - categorize tasks
                    - see who is assigned to a task

                    ## Technologies
                    - React
                    - Laravel
                    EOT
        ]
    ];
}
