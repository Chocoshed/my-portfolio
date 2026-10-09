<?php

include_once 'config/data-lang/en/project.php';
include_once 'config/data-lang/en/experience.php';
include_once 'config/data-lang/en/diploma.php';

function get_english_data()
{
    $experiences = get_all_english_experience();
    $diploma = get_all_english_diploma();
    $projects = get_all_english_project();

    return [
        // General
        'site_title' => 'Julie Fromageat',
        'site_description' => 'Welcome to my portfolio. Feel free to contact me for more information, or just to say hello :)',
        'your_job_title' => 'Back-end Web Developer',

        // Navigation
        'nav_about' => 'About',
        'nav_skills' => 'Skills',
        'nav_experience' => 'Experience',
        'nav_diploma' => 'Diploma',
        'nav_projects' => 'Projects',
        'nav_contact' => 'Contact Me!',
        'nav_resume' => 'Resume',
        'resume_url' => 'assets/files/resume-en.pdf',

        // Hero Section
        'hero_greeting' => 'Hello, I am',
        'hero_button' => 'View my work',

        // About Section
        'about_title' => 'About Me',
        'about_me_text' => 'Work-study engineering student with three years of hands-on web development with Symfony and Laravel. I take internal business applications from requirements gathering to acceptance testing, and approach them from their architecture: data model, layers, interfaces. I also have full-stack JavaScript and TypeScript experience from university projects with Angular and React.',
        'contact_email' => 'Email',
        'contact_location' => 'Location',

        // What I bring
        'strengths_title' => 'What I bring',
        'strengths' => [
            [
                'title' => 'Architecture & design',
                'description' => 'Data modelling (UML, Merise), MVC structure, separating routing, business logic and data access.',
            ],
            [
                'title' => 'End-to-end projects',
                'description' => 'From needs analysis with business teams to specifications, mockups and acceptance testing.',
            ],
            [
                'title' => 'Agile teamwork',
                'description' => 'Scrum iterations, Git and GitLab, coordination with business and operations teams.',
            ],
        ],

        // Languages & interests
        'languages_title' => 'Languages',
        'languages' => [
            ['name' => 'French', 'level' => 'Native', 'score' => 5],
            ['name' => 'German', 'level' => 'Fluent (C1)', 'score' => 4],
            ['name' => 'English', 'level' => 'Upper intermediate (B2)', 'score' => 3],
        ],
        'interests_title' => 'Interests',
        'interests' => ['Baking', 'Hiking', 'Video games'],

        // Skills Section
        'skills_title' => 'My Skills',

        // Experience Section
        'experience_title' => 'Professional Experience',
        'experience' => $experiences,

        // Diploma Section
        'diploma_title' => 'Diploma',
        'diploma' => $diploma,

        // Projects Section
        'projects_title' => 'My Projects',
        'project_btn_details' => 'Details',
        'project_btn_demo' => 'Demo',
        'project_btn_code' => 'Code',
        'projects' => $projects,

        // Project Detail Page
        'project_detail_back' => 'Back to all projects',
        'project_detail_btn_code' => 'View code',
        'project_detail_screenshots' => 'Screenshots',
        'project_detail_no_screenshots' => 'No screenshots are available for this project.',
        'project_not_found_title' => '404 - Project Not Found',
        'project_not_found_text' => 'Sorry, the project you are looking for does not exist.',
        'project_not_found_button' => 'Return to portfolio',

        // Footer
        'footer_copyright' => 'All rights reserved.',
    ];
}
