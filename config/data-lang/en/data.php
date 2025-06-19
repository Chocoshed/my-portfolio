<?php

include_once 'config/data-lang/en/project.php';
include_once 'config/data-lang/en/experience.php';

function get_english_data()
{
    $experiences = get_all_english_experience();
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
        'nav_projects' => 'Projects',
        'nav_contact' => 'Contact Me!',
        'nav_resume' => 'Resume',
        'resume_url' => 'assets/files/resume-en.pdf',

        // Hero Section
        'hero_greeting' => 'Hello, I am',
        'hero_button' => 'View my work',

        // About Section
        'about_title' => 'About Me',
        'about_me_text' => 'Thank you for wanting to know more about me! 
                To start with, yes, I did work in food service. It was a great experience with wonderful encounters. It has helped me develop a certain rigor and organization in my work, all while enjoying delicious pastries.
                Trained in web development, what really interests me today is back-end development.',
        'contact_email' => 'Email',
        'contact_location' => 'Location',

        // Skills Section
        'skills_title' => 'My Skills',

        // Experience Section
        'experience_title' => 'Professional Experience',
        'experience' => $experiences,

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
