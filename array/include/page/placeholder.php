<?php 


 if(isset($_GET['page'])){

 $page=strtolower($_GET['page']);
 include("{$page}.php");
 }



?>