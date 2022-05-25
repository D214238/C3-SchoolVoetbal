### Volg deze stappen om het project klaar te maken voor development:
1. Clone de repo (met github desktop, of git als je fancy wilt doen)
2. Maak een nieuwe lege database met de naam c3_schoolvoetbal
3. Verander .env.example naar .env en vul waardes in voor:

    `DB_DATABASE = c3_schoolvoetbal`

    `DB_USERNAME`

    `DB_PASSWORD`

4. Open het project in VS Code en voer de volgende commando's uit:

    `composer install` (hiermee installeertcomposer alle nodige packages)

    `php artisan key:generate` (hiermee maak je een encryptie key aan)

    `php artisan migrate` (hiermee maak je de tabellen aan)

    `npm install` (hiermee installeer je packages die nodig zijnvoordefront-end)

    `npm run dev` (hiermee gaat npm alle CSS en JavaScript files compileren)

5. Voer het commando `php artisan serve` uit om een server op te starten
6. start laragon op
7. Nu kan je aan de slag!
