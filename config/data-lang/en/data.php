<?php

include_once 'config/data-lang/en/project.php';
include_once 'config/data-lang/en/experience.php';

function get_english_data()
{
    $experiences = get_all_english_experience();
    $projects = get_all_english_project();

    return [
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
            'experience' => $experiences,

            // Projects Section
            'projects_title' => 'My Projects',
            'project_btn_details' => 'View Details',
            'project_btn_demo' => 'Live Demo',
            'project_btn_code' => 'View Code',
            'projects' => $projects,

            // Project Detail Page
            'project_detail_back' => 'Back to All Projects',
            'project_detail_screenshots' => 'Screenshots',
            'project_detail_no_screenshots' => 'No screenshots are available for this project.',
            'project_not_found_title' => '404 - Project Not Found',
            'project_not_found_text' => 'Sorry, the project you are looking for does not exist.',
            'project_not_found_button' => 'Return to Portfolio',

            // Footer
            'footer_copyright' => 'All Rights Reserved.',

        ];
}