<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Connecting to the database
$db = new mysqli('localhost', 'root', '', 'test3');
if ($db->connect_errno != 0) {
    echo $db->connect_error;
    exit();
} else {
    $db->set_charset("utf8mb4");
}

// Getting total rows and pages
$records = $db->query("SELECT * FROM products");
$rows = $records->num_rows;

$per_page_data = 4;
$pages = ceil($rows / $per_page_data);

$start = 0;
if (isset($_GET["page_no"])) {
    $page = $_GET["page_no"] - 1;
    $start = $page * $per_page_data;
} else {
    $page = 0;
}

$result = $db->query("SELECT * FROM products LIMIT $start, $per_page_data");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pagination Example</title>
    <style>
        .pagination a {
            margin: 0 5px;
            padding: 8px 12px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .pagination a.active {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Pagination Example</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="pagination">
        <?php
        $total_pages = $pages;
        $current_page = isset($_GET["page_no"]) ? $_GET["page_no"] : 1;

        // Display "First" button
        if ($current_page > 1) {
            echo '<a href="?page_no=1">First</a>';
        }

        // Display "Previous" button
        if ($current_page > 1) {
            echo '<a href="?page_no=' . ($current_page - 1) . '">&laquo; Previous</a>';
        }

        // Determine start and end page numbers
        $start_page = max(1, $current_page - 2);
        $end_page = min($total_pages, $current_page + 2);

        // Display page numbers
        for ($i = $start_page; $i <= $end_page; $i++) {
            if ($i == $current_page) {
                echo '<a class="active" href="?page_no=' . $i . '">' . $i . '</a>';
            } else {
                echo '<a href="?page_no=' . $i . '">' . $i . '</a>';
            }
        }

        // Display "Next" button
        if ($current_page < $total_pages) {
            echo '<a href="?page_no=' . ($current_page + 1) . '">Next &raquo;</a>';
        }

        // Display "Last" button
        if ($current_page < $total_pages) {
            echo '<a href="?page_no=' . $total_pages . '">Last</a>';
        }



        ?>
    </div>
</div>
</body>
</html>
