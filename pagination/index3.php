<?php 


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// connecting to the database.
$db = new mysqli('localhost', 'root', '', 'test3');
if ($db->connect_errno != 0) {
    echo $db->connect_error;
    exit();
} else {
    $db->set_charset("utf8mb4");
}


$records= $db->query("select * from products");
$rows= $records->num_rows;


$per_page_data=4;
$pages= ceil($rows/$per_page_data);



$start=0;
if (isset($_GET["page_no"])) {
    $page=$_GET["page_no"] -1;
    $start= $page * $per_page_data;
}




$result =$db->query("select * from products limit $start , $per_page_data");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
          while ($row= $result->fetch_object()) {
            echo "<tr>";
            echo "<th scope='row'>$row->id</th>";
            echo "<td>$row->name</td>";
            echo "<td>Otto</td>
                 <td>@mdo</td>";

            echo "</tr>";
       
       
          }
       
       ?>



    
  </tbody>
</table>


 <?php 
 
  if(!isset($_GET['page_no'])){
     $page= 1;
  }else{
    $page= $_GET['page_no'];
  }
 
  echo "Show $page of $pages pages";
 ?>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    
  <li class="page-item ">
      <a href="index3.php?page_no=1" class="page-link">First</a>
  </li>



  <li class="page-item ">
      <?php 
      
      if(isset($_GET['page_no']) &&  $_GET['page_no']> 1){
        $page_no= $_GET['page_no']-1;
       echo " <a href='index3.php?page_no=$page_no' class='page-link'>Previous</a>";
     }else{
        echo " <a class='page-link'>Previous</a>";
     }
      
      
      ?>

     
  </li>

     <?php 
     
     if(!isset($_GET['page_no'])){
       echo "<li class='page-item active'><a class='page-link' href='#'>1</a></li>";
       $counter=2;
     }else{
       $counter=1;
     }
     
     
     for ($num= $counter; $num <= $pages; $num++) { 

         if (isset($_GET['page_no']) &&  $num == $_GET['page_no']  ) {
            echo "<li class='page-item active'><a class='page-link' href='index3.php?page_no=$num'>$num</a></li>";
         }else{
            echo "<li class='page-item '><a class='page-link' href='index3.php?page_no=$num'>$num</a></li>";
         }

       
     }
     
     
     
     
     ?>

    <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li> -->




    <li class="page-item">


    <?php 
      
      if(isset($_GET['page_no']) &&  $_GET['page_no'] >= $pages){
           echo " <a class='page-link'>Next</a>";
      }elseif(isset($_GET['page_no']) ){
        $page_no= $_GET['page_no']+1;
       echo " <a href='index3.php?page_no=$page_no' class='page-link'>Next</a>";
     }else{
        echo " <a href='index3.php?page_no=2' class='page-link'>Next</a>";
     }
      
      
      ?>


     
    </li>




    <li class="page-item">
    <a href="index3.php?page_no=<?php echo $pages ?>" class="page-link">Last</a>
    </li>
  </ul>
</nav>

</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>