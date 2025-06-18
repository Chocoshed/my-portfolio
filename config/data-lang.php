<?php

// =================================================================
//  LANGUAGE DATA FILE
// =================================================================
//  This file contains all the translatable text for the portfolio.
// =================================================================

function get_text_data($lang = 'fr')
{
    $text_data = [
        'fr' => [
            // General
            'site_title' => 'Julie Fromageat',
            'site_description' => 'Bienvenue sur mon portfolio, vous pouvez me contacter pour plus de renseignement, ou juset pour laisser un petit mot :)',
            'your_job_title' => 'Développeuse Web Back-end',

            // Navigation
            'nav_about' => 'À propos',
            'nav_skills' => 'Compétences',
            'nav_experience' => 'Expérience',
            'nav_projects' => 'Projets',
            'nav_contact' => 'Me contacter !',
            'nav_resume' => 'CV',

            // Hero Section
            'hero_greeting' => 'Bonjour je suis',
            'hero_button' => 'Voir mon travail',

            // About Section
            'about_title' => 'À propos de moi',
            'about_me_text' => 'Déjà merci à toi de vouloir en savoir d\'avantages sur moi ! 
            Pour commencer, oui je suis passée par la case restauration. C\'était une belle expérience, de belles rencontres. Cela me permet aujourd\'hui d\'avoir une certaine rigueur et organisation dans mon travail, tout en mangeant de bonnes patisseries.
            Formé pour le développement web, aujourd\'hui ce qui m\'intéresse vraiment : le développement back-end.',
            'contact_email' => 'Email',
            'contact_location' => 'Localisation',

            // Skills Section
            'skills_title' => 'Mes compétences',

            // Experience Section
            'experience_title' => 'Expérience professionnelle',
            'experience' => [
                [
                    'job_title' => 'Concépteur développeur en alternance',
                    'company' => 'CARSAT de Strasbourg',
                    'period' => 'Sept. 2025 - Aout 2028',
                    'description' => 'A suivre ...'
                ],
                [
                    'job_title' => 'Développeuse web full-stack en alternance',
                    'company' => 'IUT de Haguenau',
                    'period' => 'Sept. 2023 - Aout 2025',
                    'description' => 'Développement de l\'application de gestion des absences pour l\'IUT. '
                ],
                [
                    'job_title' => 'Barista',
                    'company' => 'Cafés Henri',
                    'period' => 'Sept. 2021 - Novembre 2021',
                    'description' => 'Ce n\'est peut-être pas LE poste à mettre en avant pour ma superbe carrière, mais j\'aime le café (et le thé), alors je me permets de le montrer :)'
                ],
            ],

            // Projects Section
            'projects_title' => 'Mes projets',
            'project_btn_details' => 'Détails',
            'project_btn_demo' => 'Démo',
            'project_btn_code' => 'Le Code',
            'projects' => [
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
            ],

            // Project Detail Page
            'project_detail_back' => 'Retour à tous les projets',
            'project_detail_screenshots' => 'Captures d’écran',
            'project_detail_no_screenshots' => 'Aucune capture d’écran n’est disponible pour ce projet.',
            'project_not_found_title' => '404 - Projet non trouvé',
            'project_not_found_text' => 'Désolé, le projet que vous recherchez n’existe pas.',
            'project_not_found_button' => 'Retour au portfolio',

            // Footer
            'footer_copyright' => 'Tous droits réservés.',
        ],
        'en' => [
            // General
            'site_title' => 'Welcome of the portfolio from a :',
            'site_description' => 'Welcome to my portfolio, you can contact me for more infos :)',
            'your_job_title' => 'Back-end web developper',

            // Navigation
            'nav_about' => 'About',
            'nav_skills' => 'Skills',
            'nav_experience' => 'Experience',
            'nav_projects' => 'Projects',
            'nav_contact' => 'Contact me !',
            'nav_resume' => 'Resume',

            // Hero Section
            'hero_greeting' => 'Hello, I\'m',
            'hero_button' => 'View My Work',

            // About Section
            'about_title' => 'About Me',
            'about_me_text' => "First of all, thank you for wanting to know more about me! 
            To begin with, yes, I went through the restaurant industry. It was a great experience with wonderful encounters. Today, it allows me to have a certain rigor and organization in my work, all while enjoying delicious pastries.
            Trained in web development, what really interests me today is back-end development.",
            'contact_email' => 'Email',
            'contact_location' => 'Location',

            // Skills Section
            'skills_title' => 'My Skills',

            // Experience Section
            'experience_title' => 'Work Experience',
            'experience' => [
                [
                    'job_title' => 'Software Developer Apprentice',
                    'company' => 'CARSAT Strasbourg',
                    'period' => 'Sept. 2025 - Aug. 2028',
                    'description' => 'To be continued ...'
                ],
                [
                    'job_title' => 'Full-stack Web Developer Apprentice',
                    'company' => 'IUT of Haguenau',
                    'period' => 'Sept. 2023 - Aug. 2025',
                    'description' => 'Development of the absence management application for the IUT.'
                ],
                [
                    'job_title' => 'Barista',
                    'company' => 'Cafés Henri',
                    'period' => 'Sept. 2021 - Nov. 2021',
                    'description' => 'This may not be THE job to highlight for my amazing career, but I love coffee (and tea), so I allow myself to show it :)'
                ],
            ],

            // Projects Section
            'projects_title' => 'My Projects',
            'project_btn_details' => 'View Details',
            'project_btn_demo' => 'Live Demo',
            'project_btn_code' => 'View Code',
            'projects' => [
                'e-commerce-platform' => [
                    'title' => 'E-commerce Platform',
                    'description' => 'A fully-featured e-commerce website built with PHP and MySQL. Includes product management, shopping cart, and a secure checkout system.',
                    'detailed_description' => 'This was a comprehensive project to build a scalable e-commerce platform from the ground up. The back-end, powered by PHP, manages products, inventory, user accounts, and order processing. The database schema was carefully designed in MySQL to ensure data integrity and performance. Key features include a secure payment gateway integration with Stripe, a multi-step checkout process, and an administrative dashboard for managing site content and viewing sales analytics.',
                ],
                'cms-for-blog' => [
                    'title' => 'Content Management System',
                    'description' => 'A custom CMS for a client blog. Features include a Markdown editor, user role management, and a dynamic front-end built with vanilla JS.',
                    'detailed_description' => '',
                ],
                'php-portfolio-template' => [
                    'title' => 'Portfolio Website Template',
                    'description' => 'The very portfolio you are looking at. A dynamic and easy-to-update template built with PHP and SCSS.',
                    'detailed_description' => '',
                ]
            ],

            // Project Detail Page
            'project_detail_back' => 'Back to All Projects',
            'project_detail_screenshots' => 'Screenshots',
            'project_detail_no_screenshots' => 'No screenshots are available for this project.',
            'project_not_found_title' => '404 - Project Not Found',
            'project_not_found_text' => 'Sorry, the project you are looking for does not exist.',
            'project_not_found_button' => 'Return to Portfolio',

            // Footer
            'footer_copyright' => 'All Rights Reserved.',

        ],
        'de' => [
            // General
            'site_title' => 'John Doe - Webentwickler',
            'site_description' => 'Willkommen im Portfolio',
            'your_job_title' => 'Back-end-Webentwicklerin',

            // Navigation
            'nav_about' => 'Über mich',
            'nav_skills' => 'Fähigkeiten',
            'nav_experience' => 'Erfahrung',
            'nav_projects' => 'Projekte',
            'nav_contact' => 'Mich kontatktieren !',
            'nav_resume' => 'Lebenslauf',

            // Hero Section
            'hero_greeting' => 'Hallo, ich bin',
            'hero_button' => 'Meine Arbeit ansehen',

            // About Section
            'about_title' => 'Über mich',
            'about_me_text' => "Ich bin ein leidenschaftlicher und ergebnisorientierter Webentwickler mit über 5 Jahren Erfahrung in der Erstellung dynamischer und benutzerfreundlicher Webanwendungen. Ich habe eine solide Grundlage in Front-End- und Back-End-Technologien und liebe es, komplexe Probleme zu lösen und neue Fähigkeiten zu erlernen. Mein Ziel ist es, Produkte zu entwickeln, die nicht nur funktional sind, sondern auch eine großartige Benutzererfahrung bieten.",
            'contact_email' => 'E-Mail',
            'contact_location' => 'Standort',

            // Skills Section
            'skills_title' => 'Meine Fähigkeiten',

            // Experience Section
            'experience_title' => 'Berufserfahrung',
            'experience' => [
                [
                    'job_title' => 'Senior Webentwickler',
                    'company' => 'Tech Solutions Inc.',
                    'period' => '2020 - Heute',
                    'description' => 'Leitung der Entwicklung skalierbarer Webanwendungen für verschiedene Kunden. Betreuung von Junior-Entwicklern und Verbesserung interner Codierungsstandards.'
                ],
                [
                    'job_title' => 'Junior Webentwickler',
                    'company' => 'Web Crafters LLC',
                    'period' => '2018 - 2020',
                    'description' => 'Entwicklung und Wartung von Kundenwebsites mit PHP, WordPress und JavaScript. Zusammenarbeit mit dem Designteam zur Implementierung neuer Funktionen.'
                ]
            ],

            // Projects Section
            'projects_title' => 'Meine Projekte',
            'project_btn_details' => 'Details ansehen',
            'project_btn_demo' => 'Live-Demo',
            'project_btn_code' => 'Code ansehen',
            'projects' => [
                'e-commerce-platform' => [
                    'title' => 'E-Commerce-Plattform',
                    'description' => 'Eine voll funktionsfähige E-Commerce-Website, die mit PHP und MySQL erstellt wurde. Beinhaltet Produktmanagement, Warenkorb und ein sicheres Kassensystem.',
                    'detailed_description' => 'Dies war ein umfassendes Projekt zum Aufbau einer skalierbaren E-Commerce-Plattform von Grund auf. Das von PHP betriebene Backend verwaltet Produkte, Inventar, Benutzerkonten und die Bestellabwicklung. Das Datenbankschema wurde sorgfältig in MySQL entworfen, um Datenintegrität und Leistung zu gewährleisten. Zu den Hauptmerkmalen gehören eine sichere Zahlungsgateway-Integration mit Stripe, ein mehrstufiger Checkout-Prozess und ein administratives Dashboard zur Verwaltung von Website-Inhalten und zur Anzeige von Verkaufsanalysen.',
                ],
                'cms-for-blog' => [
                    'title' => 'Content-Management-System',
                    'description' => 'Ein benutzerdefiniertes CMS für einen Kundenblog. Zu den Funktionen gehören ein Markdown-Editor, die Verwaltung von Benutzerrollen und ein dynamisches Frontend, das mit Vanilla JS erstellt wurde.',
                    'detailed_description' => '',
                ],
                'php-portfolio-template' => [
                    'title' => 'Portfolio-Website-Vorlage',
                    'description' => 'Das Portfolio, das Sie gerade betrachten. Eine dynamische und einfach zu aktualisierende Vorlage, die mit PHP und SCSS erstellt wurde.',
                    'detailed_description' => '',
                ]
            ],

            // Project Detail Page
            'project_detail_back' => 'Zurück zu allen Projekten',
            'project_detail_screenshots' => 'Screenshots',
            'project_detail_no_screenshots' => 'Für dieses Projekt sind keine Screenshots verfügbar.',
            'project_not_found_title' => '404 - Projekt nicht gefunden',
            'project_not_found_text' => 'Das gesuchte Projekt existiert leider nicht.',
            'project_not_found_button' => 'Zurück zum Portfolio',

            // Footer
            'footer_copyright' => 'Alle Rechte vorbehalten.',
        ]
    ];

    return $text_data[$lang] ?? $text_data['en'];
}
