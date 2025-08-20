<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// connecting to the database.
$mysqli = new mysqli('localhost', 'root', '', 'test3');
if ($mysqli->connect_errno != 0) {
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8mb4");
}

// get num of record
$records = $mysqli->query("select * from products");
//$records2 = $mysqli->query("select count(*) from products");
$rows = $records->num_rows;

// print_r($rows);
// print_r($records2->fetch_row() );

// row per page 
$row_per_page = 4;

$pages = ceil($rows / $row_per_page);



$start = 0;
if (isset($_GET['page_no'])) {
    $page = $_GET['page_no'] - 1;
    $start = $page * $row_per_page;

}



$result = $mysqli->query("SELECT * FROM products LIMIT $start, $row_per_page");

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP Pagination</title>
</head>

<body>
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>

                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['name'] ?></td>
                        <td>Otto</td>
                        <td>@mdo</td>

                    </tr>
                    <?php
                }
                ?>





            </tbody>
        </table>

        <div>
            <p> <?php

            if (!isset($_GET['page_no'])) {
                $showpage = 1;
            } else {
                $showpage = $_GET['page_no'];
            }

            echo " Showing $showpage of  $pages pages" ?> </p>

        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item ">
                    <a class="page-link" href="index2.php?page_no=1">Fast</a>
                </li>


                <li class="page-item ">
                    <?php
                    if (isset($_GET['page_no']) && $_GET['page_no'] > 1) {
                        $prev_page = $_GET['page_no'] - 1;
                        echo "<a href='index2.php?page_no=$prev_page' class='page-link'>Previous</a>";
                    } else {
                        echo "<a class='page-link'>Previous</a>";
                    }
                    ?>
                </li>

                <?php
                if (!isset($_GET['page_no'])) {
                    echo '<li class="page-item active"><a class="page-link" href="#">1</a></li>';
                    $count_from = 2;
                } else {
                    $count_from = 1;
                }



                for ($num = $count_from; $num <= $pages; $num++) {
                    if (isset($_GET['page_no']) &&   $num == $_GET['page_no']) {
                        echo "  <li class='page-item active'><a class='page-link' href='index2.php?page_no=$num'>$num</a></li>";
                    } else {
                        echo "  <li class='page-item '><a class='page-link' href='index2.php?page_no=$num'>$num</a></li>";
                    }
                }
                ?>





                <!-- 
                <li class='page-item active'><a class='page-link' href='#'>1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li> -->



                <li class="page-item ">
                    <?php
                    if (isset($_GET['page_no']) && ($_GET['page_no'] >= $pages)) {
                        echo "<a class='page-link'>Next</a>";

                    } else if (isset($_GET['page_no'])) {
                        $next_page = $_GET['page_no'] + 1;
                        echo "<a href='index2.php?page_no=$next_page' class='page-link'>Next</a>";
                    } else {
                        echo "<a href='index2.php?page_no=2' class='page-link'>Next</a>";
                    }
                    ?>
                </li>
                <li class="page-item">
                    <a class="page-link" href="index2.php?page_no=<?php echo $pages ?>">Last</a>
                </li>
            </ul>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>