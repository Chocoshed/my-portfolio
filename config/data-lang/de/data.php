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
        'about_me_text' => 'Vielen Dank, dass Sie mehr über mich erfahren möchten! 
                Zunächst einmal: Ja, ich habe in der Gastronomie gearbeitet. Es war eine tolle Erfahrung mit vielen Begegnungen. 
                Diese Zeit hat mir geholfen, heute eine gewisse Strenge und Organisation in meiner Arbeit zu haben – und ich genieße immer noch gutes Gebäck.
                Ich bin ausgebildete Webentwicklerin und interessiere mich besonders für die Back-End-Entwicklung.',
        'contact_email' => 'E-Mail',
        'contact_location' => 'Standort',

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
