<?php

include_once 'config/data-lang/fr/project.php';
include_once 'config/data-lang/fr/experience.php';

function get_french_data()
{
    $experiences = get_all_french_experience();
    $projects = get_all_french_project();

    return [
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
        'resume_url' => 'assets/files/resume-fr.pdf',

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
        'experience' => $experiences,

        // Projects Section
        'projects_title' => 'Mes projets',
        'project_btn_details' => 'Détails',
        'project_btn_demo' => 'Démo',
        'project_btn_code' => 'Code',
        'projects' => $projects,

        // Project Detail Page
        'project_detail_back' => 'Retour à tous les projets',
        'project_detail_btn_code' => 'Voir le code',
        'project_detail_screenshots' => 'Captures d’écran',
        'project_detail_no_screenshots' => 'Aucune capture d’écran n’est disponible pour ce projet.',
        'project_not_found_title' => '404 - Projet non trouvé',
        'project_not_found_text' => 'Désolé, le projet que vous recherchez n’existe pas.',
        'project_not_found_button' => 'Retour au portfolio',

        // Footer
        'footer_copyright' => 'Tous droits réservés.',
    ];
}
