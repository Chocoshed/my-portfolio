<?php

include_once 'config/data-lang/de/project.php';
include_once 'config/data-lang/de/experience.php';

function get_german_data()
{
    $experiences = get_all_german_experience();
    $projects = get_all_german_project();

    return [
        // General
        'site_title' => 'Julie Fromageat',
        'site_description' => 'Willkommen im Portfolio',
        'your_job_title' => 'Back-end-Webentwicklerin',

        // Navigation
        'nav_about' => 'Über mich',
        'nav_skills' => 'Fähigkeiten',
        'nav_experience' => 'Erfahrung',
        'nav_projects' => 'Projekte',
        'nav_contact' => 'Mich kontatktieren !',
        'nav_resume' => 'Lebenslauf',
        'resume_url' => '',

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
        'experience' => $experiences,

        // Projects Section
        'projects_title' => 'Meine Projekte',
        'project_btn_details' => 'Details ansehen',
        'project_btn_demo' => 'Live-Demo',
        'project_btn_code' => 'Code ansehen',
        'projects' => $projects,

        // Project Detail Page
        'project_detail_back' => 'Zurück zu allen Projekten',
        'project_detail_screenshots' => 'Screenshots',
        'project_detail_no_screenshots' => 'Für dieses Projekt sind keine Screenshots verfügbar.',
        'project_not_found_title' => '404 - Projekt nicht gefunden',
        'project_not_found_text' => 'Das gesuchte Projekt existiert leider nicht.',
        'project_not_found_button' => 'Zurück zum Portfolio',

        // Footer
        'footer_copyright' => 'Alle Rechte vorbehalten.',
    ];
}