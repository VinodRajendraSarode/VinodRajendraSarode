<?php 
include 'db.php';
if(isset($_GET['submit'])){ 
    $input = $_GET['input'];
    $sql = "select * from user where name='$input' || mobile='$input' || email='$input' || address='$input'";
    $res = mysqli_query($db_con, $sql);   
} else {
    $sql = "select * from user";
    $res = mysqli_query($db_con, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">           
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">            
              <form class="form-inline my-2 my-lg-0" method='get'>
                <input class="form-control mr-sm-2"  placeholder="Search" aria-label="Search" name="input">
                <button class="btn btn-outline-success my-2 my-sm-0" name="submit">Search</button>
              </form>
            </div>
            <a href="add.html"> Add </a>
          </nav>
        <div class="row">
           <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td> Name </td>
                            <td> Age </td>
                            <td> Mobile </td>
                            <td> Email </td>
                            <td> Address </td>
                            <td> Action </td>
                        </tr>                        
                    </thead>
                    <tbody> 
                        <?php if($res->num_rows > 0) { 
                            while($row = $res->fetch_assoc()) { ?>
                            <tr>
                                <td> <?php echo $row['name']; ?> </td>
                                <td>  <?php echo $row['age']; ?> </td>
                                <td>  <?php echo $row['mobile']; ?> </td>
                                <td>  <?php echo $row['email']; ?> </td>
                                <td>  <?php echo $row['address']; ?> </td>
                                <td> <button  class="btn btn-info mt-2" > <a href="edit.php?id=<?php echo $row['id']; ?>"> Edit </a></button> 
                                    <button  class="btn btn-danger mt-2"><a href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a></button> 
                                </td>
                            </tr>
                        <?php } } ?>
                    </tbody>
                </table>
           </div>
        </div>

    </div>
    
</body>
</html>