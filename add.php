<?php 
    include 'db.php';
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    echo $address;

    $query = "insert into user(name, age, mobile, email, address) values('$name', $age, $mobile, '$email', '$address')";
    $res = mysqli_query($db_con, $query);

    if($res){
        echo "record is successfully added";
    } else{
        echo "errer something wrong";
    }
    header("location: index.php");
?>