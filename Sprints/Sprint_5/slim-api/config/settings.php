<?php
// ============================================================
//  HandwerkerPro — App-Einstellungen
// ============================================================

return [
    'app' => [
        'name'    => 'HandwerkerPro REST-API',
        'version' => '1.0.0',
        'env'     => $_ENV['APP_ENV'] ?? 'development',
        'debug'   => ($_ENV['APP_DEBUG'] ?? 'true') === 'true',
    ],

    // CORS-Einstellungen
    'cors' => [
        'origins'  => ['*'],   // In Produktion: ['https://your-frontend.com']
        'methods'  => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
        'headers'  => ['Content-Type', 'X-API-Key', 'Authorization'],
        'max_age'  => 86400,
    ],

    // Demo API-Keys (in Produktion: in DB speichern!)
    // Format: 'api-key' => ['mitarbeiter_id' => X, 'rolle' => 'admin|meister|geselle|...']
    'api_keys' => [
        'admin-key-12345'   => ['mitarbeiter_id' => 1, 'rolle' => 'admin'],
        'meister-key-67890' => ['mitarbeiter_id' => 2, 'rolle' => 'meister'],
        'geselle-key-11111' => ['mitarbeiter_id' => 3, 'rolle' => 'geselle'],
    ],

    // Rollenhierarchie (höher = mehr Rechte)
    'role_hierarchy' => [
        'buero'   => 1,
        'azubi'   => 2,
        'geselle' => 3,
        'meister' => 4,
        'admin'   => 5,
    ],

    // Passwort-Hashing: PASSWORD_BCRYPT oder PASSWORD_ARGON2ID
    'password_algo' => PASSWORD_ARGON2ID,

    // Demo-Passwort (nur für Entwicklung!)
    'demo_password' => 'demo123',

    // Logging
    'log_path' => __DIR__ . '/../logs/app.log',
];
