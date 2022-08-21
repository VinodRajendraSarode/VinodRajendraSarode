<?php
$host = "localhost";
$user ="root";
$password="";
$db="test";

$db_con = mysqli_connect($host, $user, $password, $db);


if (mysqli_connect_errno()) {

    echo mysqli_connect_error();

    exit();

} else {

	// echo "<h3>Successful database connection !!! </h3>";


}

?>