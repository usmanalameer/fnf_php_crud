<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
        <h1 class="text-center">Read Actions</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Number</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM crud";
    $result = mysqli_query($conn,$sql) ;
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $number = $row['number'];   
       

        echo '
             <tr>
                <th>'.$id.'</th>
                <th>'.$name.'</th>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td>'.$number.'</td>
                <td>  
                <button class="btn btn-primary" ><a class="text-decoration-none text-light"  href="update.php ?uid='.$id.' ">Update </a></button>
                <button class="btn btn-danger" ><a class="text-decoration-none text-light" href="delete.php ?delid='.$id.'  ">DELETE </a></button>

                </td>
             </tr>
        ';
      

        }
    }
    ?>


    
  </tbody>
</table>

    <button class="btn btn-success"  > <a class="text-decoration-none text-light" href="create.php">Create</a> </button>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>