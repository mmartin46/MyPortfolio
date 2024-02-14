<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);

echo "Current working directory: " . getcwd() . PHP_EOL;

try {
    // Load environment variables
    $dotenv->load();

    echo "Environment variables loaded successfully." . PHP_EOL;

    // Print all environment variables for debugging
    echo "All environment variables:" . PHP_EOL;
    print_r($_ENV);

    // Get and print the value of G_USERNAME, G_PASSCODE, and G_PORT
    $username = $_ENV["G_USERNAME"] ?? "not_set";
    $passcode = $_ENV["G_PASSCODE"] ?? "not_set";
    $port = $_ENV["G_PORT"] ?? "not_set";

    echo "G_USERNAME: " . $username . PHP_EOL;
    echo "G_PASSCODE: " . $passcode . PHP_EOL;
    echo "G_PORT: " . $port . PHP_EOL;
} catch (Exception $e) {
    echo "Error loading environment variables: " . $e->getMessage() . PHP_EOL;
}
?>
