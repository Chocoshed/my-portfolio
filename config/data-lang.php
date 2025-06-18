<?php

// =================================================================
//  LANGUAGE DATA FILE
// =================================================================
//  This file contains all the translatable text for the portfolio.
// =================================================================

require_once 'config/data-lang/fr/data.php';
require_once 'config/data-lang/de/data.php';
require_once 'config/data-lang/en/data.php';


function get_text_data($lang = 'fr')
{
    $data_fr = get_french_data();
    $data_en = get_english_data();
    $data_de = get_german_data();

    $text_data = [
        'fr' =>  $data_fr,
        'en' =>  $data_en,
        'de' =>  $data_de,
    ];

    return $text_data[$lang] ?? $text_data['fr'];
}
