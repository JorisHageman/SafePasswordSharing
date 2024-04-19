## Overzicht
Safe Password Sharing is een tool voor Avionics International B.V. Met deze tool kunnen wachtwoorden veilig gedeeld worden tussen gebruikers. De tool is gemaakt met Laravel.

## Installatie
1. Clone de repository
2. Stel de .env file in met de juiste database gegevens
3. Draai sql server
4. Start het project met `php artisan serve`

## Gebruik
1. Ga naar de website
2. Voer een wachtwoord in, kies een houdbaarheid en aantal gebruiken en druk op 'Genereer link'
3. Kopieer en deel de link met de gebruiker
4. De gebruiker kan het wachtwoord zien door naar de unieke URL te gaan

## Functionaliteiten
- Wachtwoord genereren
    - Alle wachtwoorden worden encrypted opgeslagen
    - Alle id's worden gegenereerd met een unieke hash
    - Het wachtwoord is alleen te zien door op de link te klikken
- Wachtwoord delen
    - Wachtwoord delen met een link
    - De link is maar een bepaald aantal keer te gebruiken
    - De link is maar een bepaalde tijd geldig
- Wachtwoord bekijken
    - Alle gegevens worden na bekiijken verwijderd of wanneer de link niet meer geldig is
