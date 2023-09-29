<?php
include 'connect.php';

  if(isset($_GET['delid'])){
    $id =$_GET['delid'];
    
    
    $sql="DELETE FROM crud WHERE id = $id ";
    
    $result =mysqli_query($conn,$sql) ;
    if ($result){
        header('location:http://localhost/fnfcrud/read.php');
    }
}  
    
?>