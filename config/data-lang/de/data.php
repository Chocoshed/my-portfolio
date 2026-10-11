<?php

include_once 'config/data-lang/de/project.php';
include_once 'config/data-lang/de/experience.php';
include_once 'config/data-lang/de/diploma.php';

function get_german_data()
{
    $experiences = get_all_german_experience();
    $diploma = get_all_german_diploma();
    $projects = get_all_german_project();

    return [
        // General
        'site_title' => 'Julie Fromageat',
        'site_description' => 'Willkommen auf meinem Portfolio! Sie können mich kontaktieren, um weitere Informationen zu erhalten oder einfach, um eine kleine Nachricht zu hinterlassen :)',
        'your_job_title' => 'Back-End-Webentwicklerin',

        // Navigation
        'nav_about' => 'Über mich',
        'nav_skills' => 'Fähigkeiten',
        'nav_experience' => 'Erfahrung',
        'nav_diploma' => 'Diplom',
        'nav_projects' => 'Projekte',
        'nav_contact' => 'Kontaktieren Sie mich!',
        'nav_resume' => 'Lebenslauf',
        'resume_url' => 'assets/files/resume-de.pdf',

        // Hero Section
        'hero_greeting' => 'Hallo, ich bin',
        'hero_button' => 'Meine Arbeit ansehen',

        // About Section
        'about_title' => 'Über mich',
        'about_me_text' => 'Ingenieurstudentin im dualen System mit drei Jahren Praxiserfahrung in der Webentwicklung mit Symfony und Laravel. Ich begleite interne Fachanwendungen von der Anforderungsaufnahme bis zur Abnahme und gehe sie über ihre Architektur an: Datenmodell, Schichten, Schnittstellen. Außerdem habe ich Full-Stack-Erfahrung mit JavaScript und TypeScript aus Hochschulprojekten mit Angular und React.',
        'contact_email' => 'E-Mail',
        'contact_location' => 'Standort',

        // What I bring
        'strengths_title' => 'Was ich mitbringe',
        'strengths' => [
            [
                'title' => 'Architektur & Design',
                'description' => 'Datenmodellierung (UML, Merise), MVC-Struktur, Trennung von Routing, Geschäftslogik und Datenzugriff.',
            ],
            [
                'title' => 'Projekte von A bis Z',
                'description' => 'Von der Anforderungsanalyse mit den Fachabteilungen über Spezifikationen und Mockups bis zur Abnahme.',
            ],
            [
                'title' => 'Agile Teamarbeit',
                'description' => 'Scrum-Iterationen, Git und GitLab, Abstimmung mit Fachabteilungen und Betrieb.',
            ],
        ],

        // Languages & interests
        'languages_title' => 'Sprachen',
        'languages' => [
            ['name' => 'Französisch', 'level' => 'Muttersprache', 'score' => 5],
            ['name' => 'Deutsch', 'level' => 'Verhandlungssicher (C1)', 'score' => 4],
            ['name' => 'Englisch', 'level' => 'Fließend (B2)', 'score' => 3],
        ],
        'interests_title' => 'Interessen',
        'interests' => ['Backen', 'Wandern', 'Videospiele'],

        // Skills Section
        'skills_title' => 'Meine Fähigkeiten',

        // Experience Section
        'experience_title' => 'Berufserfahrung',
        'experience' => $experiences,

        // Diploma Section
        'diploma_title' => 'Diplom',
        'diploma' => $diploma,

        // Projects Section
        'projects_title' => 'Meine Projekte',
        'project_btn_details' => 'Details',
        'project_btn_demo' => 'Demo',
        'project_btn_code' => 'Code',
        'projects' => $projects,

        // Project Detail Page
        'project_detail_back' => 'Zurück zu allen Projekten',
        'project_detail_btn_code' => 'Code ansehen',
        'project_detail_screenshots' => 'Screenshots',
        'project_detail_no_screenshots' => 'Für dieses Projekt sind keine Screenshots verfügbar.',
        'project_not_found_title' => '404 - Projekt nicht gefunden',
        'project_not_found_text' => 'Entschuldigung, das gesuchte Projekt existiert nicht.',
        'project_not_found_button' => 'Zurück zum Portfolio',

        // Footer
        'footer_copyright' => 'Alle Rechte vorbehalten.',
    ];
}
