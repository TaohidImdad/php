<?php 


$file = fopen("data.csv", "r"); // Open the CSV file in read mode

while (($row = fgetcsv($file, 1000, ",")) !== FALSE) {
    print_r($row); // Process each row as an array
}

fclose($file); // Close the file

//write 

$data = [
    ["Name", "Age", "City"],
    ["Alice", 25, "New York"],
    ["Bob", 30, "Los Angeles"],
];

$file = fopen("output.csv", "w"); // a Open the file in write mode

foreach ($data as $row) {
    fputcsv($file, $row); // Write each row as a CSV line
}

fclose($file); // Close the file

$rows = array_map('str_getcsv', file('data.csv')); // Read the entire CSV as an array of rows
print_r($rows);






?>
