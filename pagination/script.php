<?php
// connecting to the database.
$mysqli = new mysqli('localhost', 'root', '', 'test3');
if ($mysqli->connect_errno != 0) {
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8mb4");
}



// get the total nr of rows.
$records = $mysqli->query("select * from products");

$nr_of_rows = $records->num_rows;



// Setting the number of rows to display in a page.
$rows_per_page = 4;

// calculating the nr of pages.
$pages = ceil($nr_of_rows / $rows_per_page);

// Setting the start from, value.
$start = 0;

// If the user clicks on the pagination buttons.
if (isset($_GET['page-nr'])) {
    $page = $_GET['page-nr'] - 1;
    $start = $page * $rows_per_page;
}

// Query the database based on the calculated $start value, 
// and the fixed $rows_per_page value.
$result = $mysqli->query("SELECT * FROM products LIMIT $start, $rows_per_page");

?>