<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
</head>
<body>
      
 <?php 
 // chr(56) ord("A")
 // strlen()
 // substr()
 // sscanf()
 // strpos()
 // 

 

     if(isset($_POST['submit'])){
        $name1= $_POST['name'];
        $password1= $_POST['password'];

        $rows= file("admin.php");

        foreach ($rows as $key => $value) {
           
            list($id, $name, $email, $password,)= explode(",",$value);

            if($name == $name1 && $password == $password1 ){

                $_SESSION['uname']=$name;
                $_SESSION['uemail']=$email;
                $_SESSION['uid']=$id;
               
                header("location:student_app.php");
                // header("location:student_app.php");

            }else{
                echo "incourrect username or password";
            }

        }




     }
 
 
 ?>



    <form action="#" method="post">
        name <br>
        <input type="text" name="name"><br>
        password <br>
        <input type="text" name="password" id=""> <br>

        <button type="submit" name="submit"> submit</button>
    </form>
</body>
</html>