



<?php include "script.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php and mysql pagination</title>
</head>

<body>

<?php 
      if(!isset($_GET['page-nr'])){
         ?> <a class="active" href="?page-nr=1">1</a> <?php
         $count_from = 2;
      }else{
         $count_from = 1;
      }
   ?>


    <div class="content">
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <p><?php echo $row['id'] . ' - ' . $row["name"] ?></p>
            <?php
        }
        ?>
    </div>

    <div class="page-info">
        <?php
        if (!isset($_GET['page-nr'])) {
            $page = 1;
        } else {
            $page = $_GET['page-nr'];
        }
        ?>
        Showing <?php echo $page ?> of <?php echo $pages; ?> pages
    </div>

    
    <div class="pagination">
        <!-- Go to the first page -->
        <a href="?page-nr=1">First</a>

        <!-- Go to the previous page -->
        <?php
        if (isset($_GET['page-nr']) && $_GET['page-nr'] > 1) {
            ?> <a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Previous</a> <?php
        } else {
            ?> <a>Previous</a> <?php
        }
        ?>

        <!-- Output the page numbers -->
      <div class="page-numbers">
         <?php 
            if(!isset($_GET['page-nr'])){
               ?> 
               
               <a class="active" href="?page-nr=1">1</a> 
               
               <?php
               $count_from = 2;
            }else{
               $count_from = 1;
            }
         ?>
         
         <?php
            for ($num = $count_from; $num <= $pages; $num++) {
               if($num == @$_GET['page-nr']) {
                  ?> <a class="active" href="?page-nr=<?php echo $num ?>"><?php echo $num ?></a> <?php
               }else{
                  ?> <a href="?page-nr=<?php echo $num ?>"><?php echo $num ?></a> <?php
               }
            }
         ?>
      </div>

       <!-- Go to the next page -->
        <?php 
            if(isset($_GET['page-nr'])){
                if($_GET['page-nr'] >= $pages){
                    ?> <a>Next</a> <?php
                }else{
                    ?> <a href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a> <?php
                }
            }else{
                ?> <a href="?page-nr=2">Next</a> <?php
            }
        ?>

       <a href="?page-nr=<?php echo $pages ?>">Last</a>


    </div>


</html>



<?php
// Total number of pages
$total_pages = 10;

// Get the current page from the URL or default to 1
$current_page = isset($_GET['page-nr']) ? (int)$_GET['page-nr'] : 1;

// Define the range for pagination display
$range = 1; // One page before and one page after the current page

// Start and end page calculations
$start_page = max(1, $current_page - $range);
$end_page = min($total_pages, $current_page + $range);
?>

<div class="pagination">
    <?php
    // Display "Previous" button if not on the first page
    if ($current_page > 1) {
        echo '<a href="?page-nr=' . ($current_page - 1) . '">&laquo; Previous</a>';
    }

    // Display middle page links
    for ($i = $start_page; $i <= $end_page; $i++) {
        if ($i == $current_page) {
            echo '<a class="active" href="?page-nr=' . $i . '">' . $i . '</a>';
        } else {
            echo '<a href="?page-nr=' . $i . '">' . $i . '</a>';
        }
    }

    // Display "Next" button if not on the last page
    if ($current_page < $total_pages) {
        echo '<a href="?page-nr=' . ($current_page + 1) . '">Next &raquo;</a>';
    }
    ?>
</div>
