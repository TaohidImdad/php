<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'vendor/autoload.php'; // Load Composer dependencies

$faker = Faker\Factory::create();

// Database connection setup
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db   = 'batch61';

$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Batch insert size
$batchSize = 1000;
$totalRecords = 10000000000; // 10 billion
$inserted = 0;

while ($inserted < $totalRecords) {
    $values = [];
    
    // Generate batch of fake users
    for ($i = 0; $i < $batchSize; $i++) {
        $firstName = $mysqli->real_escape_string($faker->firstName);
        $lastName = $mysqli->real_escape_string($faker->lastName);
        $city = $mysqli->real_escape_string($faker->city);
        $zipCode = $mysqli->real_escape_string($faker->postcode);
        $gender = $faker->randomElement(['male', 'female']);
        
        $values[] = "('$firstName', '$lastName', '$city', '$zipCode', '$gender')";
    }

    // Prepare the insert query
    $sql = "INSERT INTO users (first_name, last_name, city, zip_code, gender) VALUES " . implode(", ", $values);

    if ($mysqli->query($sql) === TRUE) {
        $inserted += $batchSize;
        echo "Inserted $inserted / $totalRecords records\n";
    } else {
        echo "Error: " . $sql . "\n" . $mysqli->error;
    }
}

// Close the connection
$mysqli->close();

?>
