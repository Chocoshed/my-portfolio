<?php

include_once 'config/data-lang/fr/project.php';
include_once 'config/data-lang/fr/experience.php';
include_once 'config/data-lang/fr/diploma.php';

function get_french_data()
{
    $experiences = get_all_french_experience();
    $diploma = get_all_french_diploma();
    $projects = get_all_french_project();

    return [
        // General
        'site_title' => 'Julie Fromageat',
        'site_description' => 'Bienvenue sur mon portfolio, vous pouvez me contacter pour plus de renseignement, ou juste pour laisser un petit mot :)',
        'your_job_title' => 'Développeuse Web Back-end',

        // Navigation
        'nav_about' => 'À propos',
        'nav_skills' => 'Compétences',
        'nav_experience' => 'Expérience',
        'nav_diploma' => 'Diplôme',
        'nav_projects' => 'Projets',
        'nav_contact' => 'Me contacter !',
        'nav_resume' => 'CV',
        'resume_url' => 'assets/files/resume-fr.pdf',

        // Hero Section
        'hero_greeting' => 'Bonjour je suis',
        'hero_button' => 'Voir mon travail',

        // About Section
        'about_title' => 'À propos de moi',
        'about_me_text' => 'Élève ingénieure en alternance, avec trois ans d\'expérience pratique en développement web avec Symfony et Laravel. J\'accompagne des applications métier internes de l\'expression des besoins jusqu\'à la recette, en les abordant par leur architecture : modèle de données, couches, interfaces. J\'ai aussi une expérience full-stack JavaScript et TypeScript acquise lors de projets universitaires avec Angular et React.',
        'contact_email' => 'Email',
        'contact_location' => 'Localisation',

        // What I bring
        'strengths_title' => 'Ce que j\'apporte',
        'strengths' => [
            [
                'title' => 'Architecture & conception',
                'description' => 'Modélisation des données (UML, Merise), structure MVC, séparation du routage, de la logique métier et de l\'accès aux données.',
            ],
            [
                'title' => 'Projets de bout en bout',
                'description' => 'De l\'analyse des besoins avec les équipes métier aux spécifications, maquettes et à la recette.',
            ],
            [
                'title' => 'Travail en équipe agile',
                'description' => 'Itérations Scrum, Git et GitLab, coordination avec les équipes métier et d\'exploitation.',
            ],
        ],

        // Languages & interests
        'languages_title' => 'Langues',
        'languages' => [
            ['name' => 'Français', 'level' => 'Langue maternelle', 'score' => 5],
            ['name' => 'Allemand', 'level' => 'Courant (C1)', 'score' => 4],
            ['name' => 'Anglais', 'level' => 'Intermédiaire avancé (B2)', 'score' => 3],
        ],
        'interests_title' => 'Centres d\'intérêt',
        'interests' => ['Pâtisserie', 'Randonnée', 'Jeux vidéo'],

        // Skills Section
        'skills_title' => 'Mes compétences',

        // Experience Section
        'experience_title' => 'Expérience professionnelle',
        'experience' => $experiences,

        // Diploma Section
        'diploma_title' => 'Diplôme',
        'diploma' => $diploma,

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
