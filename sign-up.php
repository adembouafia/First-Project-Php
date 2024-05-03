<?php
    include './connect.php';


    $username = $_POST['Usernameup'];
    $email = $_POST['email'];
    $password = $_POST['Passwordup'];

    $sql = "INSERT INTO `sign_up` VALUES ('?' , '$username' , '$email' , '$password');";
    $res = mysqli_query($conn , $sql);
    
    if ($res){
        header("Location: index.html");
        exit();
    }
    else{
        echo "erreur";
    }
?>


