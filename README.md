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
4. De gebruiker kan het wachtwoord zien door op de link te klikken

## Functionaliteiten
- Wachtwoord genereren
    - Alle wachtwoorden worden encrypted opgeslagen
    - Alle id's worden gegenereerd met een unieke hash
    - Het wachtwoord is alleen te zien door op de link te klikken
    - Alle gegevens worden na bekiijken verwijderd
