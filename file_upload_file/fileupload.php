<?php 

if (isset($_POST['btnSubmit'])) {
   
    $file= $_FILES['photo'];
    if(isset($_FILES['photo']) && $_FILES['photo']['error']== 0){
        $name=$file['name'];
        $type=$file['type'];
        $tmp_name=$file['tmp_name'];
        $size=$file['size'];
        move_uploaded_file( $tmp_name,'img/'. $name);
    }
    print_r($file);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="photo" >
    <button type="submit" name="btnSubmit">submit</button>
</form>
</body>
</html>