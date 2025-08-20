<?php 
// http verbs   get post put patch delete 
// security validate and sanitization

if(isset($_GET['name'])){
    //$name=  htmlspecialchars( $_GET['name']);
    $name= filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
}

//$_REQUEST["name"]


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  
<form action="#" method="get">
   name <br>
   <input type="text" name="name"><br>
   email <br>
   <input type="text" name="email"><br>

   <button type="submit">Submit</button>




</form>
</body>

</html>