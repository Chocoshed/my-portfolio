<?php

function get_all_german_project()
{
    return [
        'developper-battle' => [
            'title' => 'Entwickler-Battle',
            'description' => 'Ein kleines Lernspiel, das im Rahmen eines Projekts für den BUT erstellt wurde. Inspiriert von Pokémon-Spielen!',
            'detailed_description' => <<<EOT
                            Das Thema des Spiels war "Einführung in die Programmierung".

                            Ich habe mich von einem Spiel aus meiner Kindheit inspirieren lassen: Pokémon.

                            In diesem Spiel kann man die Grundlagen der Programmierung entdecken, angefangen mit den Grundlagen der Webentwicklungssprachen wie HTML, CSS, JS, PHP, SQL usw.

                            Für die Entwicklung habe ich mich entschieden, meine Komfortzone zu verlassen. Die Wahl der Sprache war frei, und ich habe mich für React.js entschieden.

                            Ich habe auch GIFs erstellt, um schnell und einfach animierte Charaktere zu haben, dank der Website Pixelart. [>Hier<](https://www.pixilart.com/chocoshed/albums/game-378425) sind die verwendeten GIFs.
                            EOT,
        ],
        'feffs' => [
            'title' => 'FEFFS - Mobile App',
            'description' => 'Eine Anwendung, die im Rahmen eines Projekts für den BUT erstellt wurde. Sie sollte es ermöglichen, Projektionen anzuzeigen und zu reservieren.',
            'detailed_description' => '',
        ],
        'gestion-des-absences' => [
            'title' => 'Schulverwaltungsanwendung',
            'description' => 'Eine Anwendung, die es dem Personal des IUT ermöglicht, Abwesenheiten zu verwalten und die Klassen der Studenten einzusehen. 
                        Diese Anwendung wurde während meiner zweijährigen Ausbildung entwickelt.',
            'detailed_description' => <<<EOT
                            
                            Diese Anwendung, eine Erweiterung einer bestehenden Anwendung, ermöglicht es dem zuständigen Personal des IUT, Abwesenheiten und Studenten zu verwalten.

                            ## Hauptfunktionen:
                            - **Abwesenheiten eintragen**
                            - **Abwesenheitsnachweise hinzufügen**
                            - **Abwesenheiten anzeigen**
                            - **Studentenlisten anzeigen** (Liste + Fotogalerie)

                            ## Abwesenheitsübersicht
                            Die komplexeste Seite des Projekts, die ich mehrmals überarbeiten musste. Ursprünglich nur in Twig entwickelt, funktioniert sie jetzt vollständig in JavaScript (da React im Projekt nicht verwendet wird).
                            EOT,
        ],
        'app-tata-lolo' => [
            'title' => 'Mission-Tracking-App',
            'description' => '... In Bearbeitung ...
                        Eine Anwendung, die für eine Freundin, eine Revenue-Managerin, entwickelt wurde. Sie ermöglicht die Verfolgung von Missionen pro Hotel sowie ein Dashboard für jedes Hotel.',
            'detailed_description' => ''
        ]
    ];
}
