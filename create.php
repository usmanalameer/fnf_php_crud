<?php
    $conn= mysqli_connect('localhost','root','','fnfcrud');


    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $number=$_POST['number'];

        
        $sql="INSERT INTO crud (name,email,password,number)
                VALUES('$name','$email','$password','$number')";

    $result = mysqli_query($conn,$sql,) ;
    if ($result){
        echo 'DATA INSERTED';
    }else{
        die(mysqli_error($conn));
    }
}
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

<div class="container w-50">
    <div class="text-center" >
        <h1>Create Action</h1>
    </div>

    <form action="" method="post">

        <div class="mt-2" >
            <label class="form-label">Name</label>
            <input type="text" class="form-control"  name="name" >
        </div>

        <div class="mt-2" >
            <label class="form-label">E-mail</label>
            <input type="text" class="form-control"  name="email" >
        </div>

        <div class="mt-2" >
            <label class="form-label">Password</label>
            <input type="text" class="form-control"  name="password" >
        </div>

        <div class="mt-2" >
            <label class="form-label">Number</label>
            <input type="text" class="form-control"  name="number" >

        </div>
        <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
    </form>
</div>
    <div class="container">
    <button class="btn btn-success" > <a href="read.php" class="text-decoration-none text-light" >List</a> </button>
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