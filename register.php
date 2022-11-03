<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "spikizi"; //localhost/phpmyadmin 
    $conn = mysqli_connect($host, $username, $password, $database);

    $name = ($_POST['Name']);
    $email=($_POST['Email']);
    $pass=($_POST['Password']);

    $sql = "INSERT INTO registration (Name, Email, Password) VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
  echo  Header("Location: log in.html");
} else {
  echo "Error in adding new user: " . mysqli_error($conn);
}

mysqli_close($conn);

?>