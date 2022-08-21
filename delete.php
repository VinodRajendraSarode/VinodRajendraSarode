<?php 
    include 'db.php';

    $id = $_GET['id'];
   

    $query = "delete from user where id = $id";
    $res = mysqli_query($db_con, $query);

    if($res){
        echo "record is Deleted";
    } else{
        echo "errer something wrong";
    }
    header('location:index.php');
  
?>