<?php

// Include the language data
require_once 'config/data-lang.php';

// =================================================================
//  LANGUAGE SELECTION
// =================================================================
// Default language is English
$DEFAULT_LANG = 'fr';
$ALLOWED_LANGS = ['fr', 'en', 'de'];

// Determine the current language from URL or default
$current_lang = isset($_GET['lang']) && in_array($_GET['lang'], $ALLOWED_LANGS)
    ? $_GET['lang']
    : $DEFAULT_LANG;

function get_lang_url($path = '', $lang = null)
{
    global $current_lang;
    $lang = $lang ?? $current_lang;

    // If path is empty, use current page
    if ($path === '') {
        $path = $_SERVER['REQUEST_URI'];
    }

    // Handle full URLs (if path contains the domain)
    $url_parts = parse_url($path);
    $path = isset($url_parts['path']) ? $url_parts['path'] : '';
    $query = isset($url_parts['query']) ? $url_parts['query'] : '';
    $fragment = isset($url_parts['fragment']) ? '#' . $url_parts['fragment'] : '';

    // Parse query params
    $params = [];
    if ($query) {
        parse_str($query, $params);
    }

    // Set the language param
    $params['lang'] = $lang;

    // Rebuild query string
    $new_query = http_build_query($params);

    // Rebuild URL
    return $path . ($new_query ? '?' . $new_query : '') . $fragment;
}

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
        'image' => './assets/images/projects/project-slug-1/screenshots/level-selection.png',
        'images' => [
            './assets/images/projects/project-slug-1/screenshots/login.png',
            './assets/images/projects/project-slug-1/screenshots/intro.png',
            './assets/images/projects/project-slug-1/screenshots/level-choice.gif',
            './assets/images/projects/project-slug-1/screenshots/first-ennemi.png',
            './assets/images/projects/project-slug-1/screenshots/first-ennemi2.png',
            './assets/images/projects/project-slug-1/screenshots/first-battle.gif',
            './assets/images/projects/project-slug-1/screenshots/second-battle.gif',
            './assets/images/projects/project-slug-1/screenshots/fourgth-ennemi.png',
            './assets/images/projects/project-slug-1/screenshots/end-demo.png',
        ],
        'tags' => ['React.js'],
        'live_url' => '#',
        'code_url' => 'https://github.com/Chocoshed/react-developer-rpg-game'
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
