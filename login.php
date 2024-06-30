<?php
require_once('DBConnect.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $sql = "select * from users where username= '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0 ) {
        echo "Login Successful!";
    } else {
        echo "Wrong username or password";
    }
}


?>