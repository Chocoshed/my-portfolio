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
            'detailed_description' => <<<EOT
                    Diese Anwendung ist ein Projekt, das darauf ausgelegt ist, Festivalbesuchern ein optimales Erlebnis zu bieten, indem sie alle Aspekte ihrer Festivalteilnahme direkt über ihr Smartphone verwalten können.

                    ## Kontoverwaltung

                    Registrierung und Anmeldung der Nutzer.
                    Vollständige Verwaltung des Benutzerprofils.
                    Möglichkeit, persönliche Daten zu exportieren (DSGVO-Konformität).

                    ## Festivalpass

                    Sicherer Kauf von Pässen.
                    Anzeige des QR-Codes für eine schnelle Validierung.
                    Verwaltung der mit dem Pass verbundenen Informationen (Name, Vorname, Foto usw.).

                    ## Programm & Veranstaltungen

                    Einsicht in das Tagesprogramm.
                    Filtern von Veranstaltungen nach Kategorie (Preisträger, Spielfilme, Retrospektiven).
                    Hinzufügen und Entfernen von Veranstaltungen zum/vom persönlichen Programm.
                    Personalisierte Planung mit Überschneidungserkennung.

                    ## Ticketing

                    Kauf von Tickets für Veranstaltungen.
                    Detaillierte Informationen zu Partnerkinos.
                    Preise und Vorteile im Zusammenhang mit dem Festivalpass.

                    ## Technische Funktionen

                    Integrierter QR-Code-Scanner.
                    Heller/Dunkler Modus für optimalen Sehkomfort.
                    Lokale Datenspeicherung für Offline-Zugriff.
                    Echtzeit-Synchronisierung mit dem Server.

                    EOT
        ],
        'gestion-des-absences' => [
            'title' => 'Schulverwaltung',
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
            'detailed_description' => <<<EOT

                    ## Was ist ein/e Revenue Manager/in?
                    Ein/e Revenue Manager/in ist eine Person, die Hotels (oder andere Unternehmen) dabei hilft, mehr Geld zu verdienen, indem sie Preise und Buchungen optimal verwaltet. Ihre Aufgabe besteht darin, Verkäufe, Nachfrage und Konkurrenz zu analysieren, um zum Beispiel zu entscheiden, zu welchem Preis die Zimmer täglich verkauft werden sollen, um den Umsatz des Hotels zu optimieren. Es ist ein bisschen wie ein/e Dirigent/in für Preise und Verfügbarkeiten, damit das Hotel möglichst profitabel ist.

                    ## Bedarf
                    Diese Anwendung entsteht aus einem konkreten Bedarf einer Revenue Managerin in ihrem Arbeitsalltag. Sie möchte einen besseren Überblick über jedes Hotel, für das sie verantwortlich ist, sowie über die damit verbundenen Aufgaben haben.

                    ## Geplante Funktionen:
                    - Ein Dashboard pro Hotel (Umsatz, Umsatzentwicklung, Aufgaben, ...)
                    - Zeiterfassung pro Hotel
                    - Aufgaben anzeigen/hinzufügen können
                    - Aufgaben nach Kategorien sortieren
                    - Sehen, wer einer Aufgabe zugewiesen ist

                    ## Technologien
                    - React
                    - Laravel
                    EOT
        ]
    ];
}
