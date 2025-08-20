<?php 

date_default_timezone_set("Asia/Dhaka");

// Current date in "Year-Month-Day" format
echo date("Y-m-d"); // e.g., 2024-11-06

print_r(getdate(time()))  ;

// // Current time in "Hour:Minute:Second" format
// echo date("H:i:s"); // e.g., 14:30:59

// // Full date and time
// echo date("Y-m-d H:i:s"); // e.g., 2024-11-06 14:30:59

// // Day of the week, month, and year
// echo date("l, F j, Y"); // e.g., Tuesday, November 6, 2024



// // Current date and time
// $date = new DateTime();
// echo $date->format('Y-m-d H:i:s');

// // Specific date and time
// $date = new DateTime('2024-11-06 14:30:00');
// echo $date->format('Y-m-d H:i:s');


// $date = new DateTime();
// $date->add(new DateInterval('P10D')); // Add 10 days
// echo $date->format('Y-m-d'); // 10 days later

// $date->sub(new DateInterval('P1M')); // Subtract 1 month
// echo $date->format('Y-m-d'); // 1 month earlier


// $date = new DateTime('now', new DateTimeZone('America/New_York'));
// echo $date->format('Y-m-d H:i:s'); // Time in New York

// // Changing the timezone
// $date->setTimezone(new DateTimeZone('Europe/London'));
// echo $date->format('Y-m-d H:i:s'); // Time in London

// echo time(); // e.g., 1730681400

// $timestamp = 1730681400;
// echo date("Y-m-d H:i:s", $timestamp); // e.g., 2024-11-06 14:30:00

// echo date("Y-m-d H:i:s"); // Outputs current date and time in "YYYY-MM-DD HH:MM:SS" format

// echo date("l, F j, Y"); // e.g., "Tuesday, November 6, 2024"
// echo date("Y-m-d\TH:i:sP"); // e.g., "2024-11-06T14:30:59+01:00"
// echo date("d/m/Y H:i:s A"); // e.g., "06/11/2024 14:30:59 PM"

// echo date("Y-m-d", strtotime("+5 days")); // Adds 5 days to the current date

// echo date("Y-m-d", strtotime("+3 months")); // Adds 3 months to the current date
// echo date("Y-m-d", strtotime("+2 years")); // Adds 2 years to the current date
// echo date("Y-m-d H:i:s", strtotime("+2 hours +30 minutes +45 seconds")); // Adds 2 hours, 30 minutes, and 45 seconds
// $start_date = "2024-11-06";
// echo date("Y-m-d", strtotime($start_date . " +10 days")); // Adds 10 days to the specified date

// echo date("Y-m-d", strtotime("-7 days")); // Subtracts 7 days from the current date
// echo date("Y-m-d", strtotime("-1 month")); // Subtracts 1 month from the current date


// // Adding 1 week to the current date
// echo date("Y-m-d", strtotime("+1 week")); // e.g., 2024-11-13

// // Adding 6 hours to the current time
// echo date("Y-m-d H:i:s", strtotime("+6 hours")); // e.g., 2024-11-06 20:30:59

// // Subtracting 30 minutes from a specific date and time
// $specific_datetime = "2024-11-06 14:30:00";
// echo date("Y-m-d H:i:s", strtotime($specific_datetime . " -30 minutes")); // e.g., 2024-11-06 14:00:00




?>