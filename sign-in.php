<?php
session_start();
include './connect.php';

$username = $_POST['name']; 
$password = $_POST['pass']; 

$query = "SELECT * FROM sign_up WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

// Check if the query executed successfully and if there is a row returned
if ($result && mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = true;
    echo 'logged in'; 
    exit();
} else {
    echo 'wrong credentials'; 
}

mysqli_close($conn);
?>
