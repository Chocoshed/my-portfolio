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
        'pollution-tracker' => [
            'title' => 'Pollution Tracker',
            'description' => 'Full-stack web application for reporting and tracking pollution sites, built with Angular and a Node.js REST API. 
                        Developed as part of an Angular course project.',
            'detailed_description' => <<<EOT
                            
                            This application allows users to report pollution they observe (illegal dumping, plastic, water, air, chemical...), browse the reports of other users and keep track of the ones they care about.
                            
                            ## Main features:
                            - **Browse pollution reports** (card list + detail page with photo)
                            - **Real-time search** (RxJS, 300 ms debounce)
                            - **Combinable filters** (type, date range, my reports, my favourites)
                            - **Report, edit and delete pollution** (only the author can edit or delete their own reports)
                            - **Favourites** (counter in the header, dedicated page, saved in localStorage)
                            - **Authentication** (sign up, log in, log out) and **user management**
                            
                            ## Front-end (Angular 20)
                            Built with standalone components and a core / features / shared architecture. Application state (authentication, pollution, favourites) is centralised with **NGXS**. Private routes are protected by a guard, and an HTTP interceptor attaches the JWT and handles expired sessions. The report form uses **Reactive Forms** with custom validators (GPS coordinates, date, photo URL) and shows a summary once submitted.
                            
                            ## Back-end (Node.js / Express)
                            A REST API with **Sequelize** on **PostgreSQL**, secured with **JWT** (HTTP-only cookie) and **bcrypt** password hashing. The API is containerised with **Docker** and deployed to **Render** through a **GitHub Actions** CI/CD pipeline.
                            
                            ## Pollution list
                            The most complex part of the project: the list combines several data streams (pollution, search, filters, favourites and the logged-in user) with RxJS `combineLatest`, so the display updates instantly whenever any of them changes.
                            EOT,
        ],
    ];
}
