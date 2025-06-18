<?php

// Start a session to store the selected language
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include the language data
require_once 'config/data-lang.php';

// =================================================================
//  LANGUAGE SELECTION
// =================================================================
// Default language is English
$DEFAULT_LANG = 'fr';
$ALLOWED_LANGS = ['fr', 'en', 'de'];

// Check if a language is set in the URL query
if (isset($_GET['lang']) && in_array($_GET['lang'], $ALLOWED_LANGS)) {
    // Set the language in the session
    $_SESSION['lang'] = $_GET['lang'];
    // Redirect to the same page without the lang query parameter to have a clean URL
    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

// Check if resume is true in the URL query, check language, and dl resume for right langage
// if(isset($_GET['resume']) $$ )

// Get the language from the session, or use the default
$current_lang = $_SESSION['lang'] ?? $DEFAULT_LANG;

// Load all text data for the current language
$text = get_text_data($current_lang);


// =================================================================
//  NON-LANGUAGE-SPECIFIC DATA
// =================================================================
// This data does not change with the language

$your_name = "Julie Fromageat";
$your_email = "julie.fr6799@gmail.com";
$your_phone = "+336.75.56.03.00";
$your_location = "Strasbourg, France";

$social_links = [
    'linkedin' => 'https://www.linkedin.com/in/julie-fromageat/',
    'github' => 'https://github.com/Chocoshed',
    // 'twitter' => 'https://twitter.com/',
];

// $your_profile_image = "https://placehold.co/600x600/1a202c/ffffff?text=JF";
$your_profile_image = "./assets/images/pp.png";

$skills = [
    ['name' => 'JavaScript (ES6+)', 'level' => 60],
    ['name' => 'Symfony', 'level' => 70],
    ['name' => 'Laravel', 'level' => 40],
    ['name' => 'MySQL', 'level' => 60],
    ['name' => 'Git & GitHub', 'level' => 90],
];

// Project structure data. The descriptions and titles are now in data-lang.php
$projects = [
    [
        'slug' => 'developper-battle',
        'detail_page' => true,
        'image' => 'https://placehold.co/1280x800/3182CE/FFFFFF?text=Project+One',
        'images' => [
            'https://placehold.co/1280x720/3182CE/FFFFFF?text=Screenshot+1',
            'https://placehold.co/1280x720/3182CE/FFFFFF?text=Screenshot+2',
            'https://placehold.co/1280x720/3182CE/FFFFFF?text=Screenshot+3'
        ],
        'tags' => ['React.js'],
        'live_url' => '#',
        'code_url' => '#'
    ],
    [
        'slug' => 'feffs',
        'detail_page' => true,
        'image' => './assets/images/projects/project-slug-2/affiche.png',
        'images' => [
            './assets/images/projects/project-slug-2/screenshots/login.jpg',
            './assets/images/projects/project-slug-2/screenshots/home.jpg',
            './assets/images/projects/project-slug-2/screenshots/events.jpg',
            './assets/images/projects/project-slug-2/screenshots/calendar.jpg',
            './assets/images/projects/project-slug-2/screenshots/tickets.jpg',
            './assets/images/projects/project-slug-2/screenshots/pass.jpg',
        ],
        'tags' => ['React native'],
        'live_url' => '#',
        'code_url' => 'https://github.com/WeJustDev/FEFFS'
    ],
    [
        'slug' => 'gestion-des-absences',
        'detail_page' => true,
        'image' => './assets/images/projects/project-slug-3/screenshots/vu-synthese.png',
        'images' => [
            './assets/images/projects/project-slug-3/screenshots/vu-synthese.png',
            './assets/images/projects/project-slug-3/screenshots/vu-detail.png',
            'https://placehold.co/1280x720/3182CE/FFFFFF?text=Screenshot+3'
        ],
        'tags' => ['Symfony', 'Tailwind', 'Javascript'],
        'live_url' => '#',
        'code_url' => '#'
    ],
    [
        'slug' => 'app-tata-lolo',
        'detail_page' => true,
        'image' => 'https://placehold.co/1280x800/2F855A/FFFFFF?text=Project+Four',
        'images' => [
            'https://placehold.co/1280x720/3182CE/FFFFFF?text=Screenshot+1',
            'https://placehold.co/1280x720/3182CE/FFFFFF?text=Screenshot+2',
            'https://placehold.co/1280x720/3182CE/FFFFFF?text=Screenshot+3'
        ],
        'tags' => ['Laravel', 'Vue.js'],
        'live_url' => '#',
        'code_url' => '#'
    ],
];

// Combine the structural project data with the language-specific text
foreach ($projects as $i => $project) {
    $slug = $project['slug'];
    if (isset($text['projects'][$slug])) {
        $projects[$i] = array_merge($project, $text['projects'][$slug]);
    }
}
