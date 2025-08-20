
<?php



if (isset($_POST["btn"])) {


  $id=$_POST["id"];
  print_r($id[0]);

  foreach ( $id as $key => $value) {
    
    print_r($_POST['id'][$key]);
    print_r($_POST['name'][$key]);
    print_r($_POST['age'][$key]);
  }

  
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div id="container1">
      abc
      <div>
        abcde
        <div>abcdefg</div>
      </div>
    </div>
    <hr />
    <label for="id">ID</label>
    <input type="text" id="id" /><br /><br />
    <label for="name">Name</label>
    <input type="text" id="name" /><br /><br />
    <label for="age">Age</label>
    <input type="text" id="age" /><br /><br />
    <button id="add">Add</button>

   
   
  

    <hr />
     <form action="#" method="post">
    <table border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Age</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="container">
        <!-- Rows will be added here -->
      </tbody>
    </table>

    <button name="btn" type="submit">submit</button>
</form>
    <script>
      //let add = document.getElementById("add");

      // add.addEventListener("click", function () {
      //     let name = document.getElementById("name").value;
      //     let id = document.getElementById("id").value;
      //     let age = document.getElementById("age").value;

      //     // Create a new row
      //     let tr = document.createElement('tr');

      //     // Create cells
      //     let tdId = document.createElement('td');
      //     tdId.textContent = id;

      //     let tdName = document.createElement('td');
      //     tdName.textContent = name;

      //     let tdAge = document.createElement('td');
      //     tdAge.textContent = age;

      //     // Create delete button cell
      //     let tdActions = document.createElement('td');
      //     let deleteBtn = document.createElement('button');
      //     deleteBtn.textContent = "Delete";
      //     deleteBtn.style.color = "white";
      //     deleteBtn.style.background = "red";
      //     deleteBtn.style.border = "none";
      //     deleteBtn.style.cursor = "pointer";
      //     deleteBtn.addEventListener("click", function () {
      //         // Remove the row
      //         tr.remove();
      //     });

      //     tdActions.appendChild(deleteBtn);

      //     // Append cells to the row
      //     tr.appendChild(tdId);
      //     tr.appendChild(tdName);
      //     tr.appendChild(tdAge);
      //     tr.appendChild(tdActions);

      //     // Append the row to the table body
      //     let tbody = document.querySelector("#container");
      //     tbody.appendChild(tr);

      //     // Clear input fields after adding
      //     document.getElementById("id").value = '';
      //     document.getElementById("name").value = '';
      //     document.getElementById("age").value = '';
      // });

      $(function () {
       

       $("#add").on("click", function(){
        let name = $("#name").val();
        let id = $("#id").val();
        let age = $("#age").val();

        let html = `
     
        <tr>
            <td>  <input type="text" name="id[]"  value="${id}"> </td>
            <td> <input type="text" name="name[]"  value="${name}"></td>
            <td>  <input type="text" name="age[]"  value="${age}"></td>
            <td><button class="delete-btn" style="color: white; background: red; border: none; cursor: pointer;">Delete</button></td>
        </tr>     
        `;
         $("#container").append(html);

        $("#name").val("");
       $("#id").val("");
        $("#age").val("");
       });

        

        $("#container").delegate(".delete-btn","click", function(){
               $(this).closest("tr").remove();
        });




      });
    </script>

    <script src="domElement.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>
