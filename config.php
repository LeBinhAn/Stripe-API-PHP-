<?php
require_once('vendor/autoload.php');

$stripe = [
    "secret_key"      => "sk_test_51HqbSFHdV0fdN5dzhea6jUf9ptnXwUHmGuzV1N44j0B66iJXv43gHC55yl3Dspk3fJeXk0QhVBn1wwWIM9I7OtYf00wG4Zt0SV",
    "publishable_key" => "pk_test_51HqbSFHdV0fdN5dzeqVIhUO7D5kS2pBrtISkAzWyirtePHPYZ5eW8x4731KaIDdh5mnW5fNCwILeWl8ji7kHF0WV001VNJ0AIv",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
