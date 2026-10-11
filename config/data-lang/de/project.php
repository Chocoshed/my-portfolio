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
        'pollution-tracker' => [
            'title' => 'Pollution Tracker',
            'description' => 'Full-Stack-Webanwendung zum Melden und Verfolgen von Umweltverschmutzungen, entwickelt mit Angular und einer Node.js-REST-API. 
                        Entstanden im Rahmen eines Angular-Kursprojekts.',
            'detailed_description' => <<<EOT
                            
                            Mit dieser Anwendung können Nutzer beobachtete Umweltverschmutzungen melden (illegale Müllablagerungen, Plastik, Wasser, Luft, Chemikalien...), die Meldungen anderer Nutzer einsehen und die für sie relevanten Meldungen verfolgen.
                            
                            ## Hauptfunktionen:
                            - **Meldungen durchsuchen** (Kartenansicht + Detailseite mit Foto)
                            - **Echtzeitsuche** (RxJS, 300 ms Debounce)
                            - **Kombinierbare Filter** (Typ, Zeitraum, eigene Meldungen, Favoriten)
                            - **Verschmutzungen melden, bearbeiten und löschen** (nur der Autor kann seine eigenen Meldungen bearbeiten oder löschen)
                            - **Favoriten** (Zähler in der Kopfzeile, eigene Seite, Speicherung im localStorage)
                            - **Authentifizierung** (Registrierung, Anmeldung, Abmeldung) und **Benutzerverwaltung**
                            
                            ## Frontend (Angular 20)
                            Aufgebaut mit Standalone-Komponenten und einer Core-/Features-/Shared-Architektur. Der Anwendungszustand (Authentifizierung, Verschmutzungen, Favoriten) wird zentral mit **NGXS** verwaltet. Private Routen sind durch einen Guard geschützt, und ein HTTP-Interceptor hängt das JWT an die Anfragen an und behandelt abgelaufene Sitzungen. Das Meldeformular nutzt **Reactive Forms** mit eigenen Validatoren (GPS-Koordinaten, Datum, Foto-URL) und zeigt nach dem Absenden eine Zusammenfassung an.
                            
                            ## Backend (Node.js / Express)
                            Eine REST-API mit **Sequelize** auf **PostgreSQL**, abgesichert durch **JWT** (HTTP-only-Cookie) und Passwort-Hashing mit **bcrypt**. Die API ist mit **Docker** containerisiert und wird über eine **GitHub Actions**-CI/CD-Pipeline auf **Render** bereitgestellt.
                            
                            ## Liste der Verschmutzungen
                            Der komplexeste Teil des Projekts: Die Liste kombiniert mehrere Datenströme (Verschmutzungen, Suche, Filter, Favoriten und angemeldeter Nutzer) mit RxJS `combineLatest`, sodass sich die Anzeige sofort aktualisiert, sobald sich einer davon ändert.
                            EOT,
        ],
        
    ];
}
