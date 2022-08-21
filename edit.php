<?php 
    include 'db.php';
    echo  $_GET['id'];
    if(isset($_POST['edit'])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        echo $address;
    
        $query = "update  user set name =' $name', age =' $age', mobile = '$mobile', email = '$email', address = '$address' where id=$id";
        $res = mysqli_query($db_con, $query);
    
        if($res){
            echo "record is successfully added";
        } else{
            echo "errer something wrong";
        }
        header("location: index.php");

    }
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Add Details</title>
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid">
            <h4>Edit Details</h4>
            <form action="edit.php?id=<?php echo  $_GET['id']; ?>" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label for="name" class="lb"> Name</label>
                            <input type="text" name="name" class="form-control"
                                id="name">
                        </div>
                        <div class="col-3">
                            <label for="mobile" class="lb"> Mobile</label>
                            <input type="number" name="mobile"
                                class="form-control" id="mobile">
                        </div>
                        <div class="col-3">
                            <label for="age" class="lb"> Age</label>
                            <input type="number" name="age" class="form-control"
                                id="age">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email" class="lb"> Email</label>
                            <input type="email" name="email"
                                class="form-control" id="email">
                        </div>
                        <div class="col">
                            <label for="address" class="lb"> Address</label>
                            <input type="text" name="address"
                                class="form-control" id="address">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mt-2" name="edit">Submit</button>

                </div>

            </form>

        </div>

    </body>
</html>