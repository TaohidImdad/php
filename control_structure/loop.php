<?php 


// for ($i=0; $i <5 ; $i++) { 
   

//     for ($j=0; $j <5; $j++) { 
//         echo "*";
//         if ($j == $i) break;
//     }

//    echo "<br>";
// }



for ($i=1; $i <=5 ; $i++) { 
   

    for ($j=1; $j <=$i; $j++) { 
        echo "*";
       
    }

   echo "<br>";
}

for ($i=5; $i >=1 ; $i--) { 
    for ($j=1; $j <=$i; $j++) { 
        echo "*";
    }

   echo "<br>";
}

for ($i=0; $i <10 ; $i++) { 
   
    for ($j=0; $j <10 ; $j++) { 
        echo $i.$j,",";
    }


    echo "<br>";
}


echo "<table border =\"1\" style='border-collapse: collapse'>";

// Loop through rows
for ($row=1; $row <= 10; $row++) { 
    echo "<tr> \n"; // Start a new table row
    
    // Loop through columns
    for ($col=1; $col <= 10; $col++) { 
        // Calculate the product of column and row
        $p = $col * $row;
        
        // Print the product in a table cell
        echo "<td>$p</td> \n";
    }
    
    echo "</tr>"; // End the table row
}

// Close the HTML table
echo "</table>";

$count=1;
for ($i=1; $i <=5 ; $i++) { 
    for ($j=1; $j <=$i; $j++) { 
        echo "$count,";
        $count++;
    }

   echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chese table</title>
</head>
<body>
    
    <table border="1">

     <?php 
     
     for ($i=1; $i <=8 ; $i++) { 
       echo "<tr>";

       for ($j=1; $j <=8; $j++) { 

        $total = $j+$i;

        if($total % 2 == 0){
           echo "<th style='height:30px;width:30px; background-color:#fff;'></th>";
        }else{
            echo "<th style='height:30px;width:30px; background-color:#000;'></th>";
        }

       
       }



       echo "</tr>";
     }
     ?>






    </table>



</body>
</html>