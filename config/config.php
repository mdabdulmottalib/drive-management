<?php
return [
    'google' => [
        'client_id' => 'YOUR_CLIENT_ID',
        'client_secret' => 'YOUR_CLIENT_SECRET',
        'redirect_uri' => 'http://brandly.fi/drive/public/oauth2callback.php',
        'scopes' => ['https://www.googleapis.com/auth/drive'],  // Use scope URL as a string
    ],
    'db' => [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => 'drive_management',
    ],
];
