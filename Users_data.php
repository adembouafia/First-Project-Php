<?php
    include "connect.php";

    $sql = "SELECT * FROM sign_up;";
    $res = mysqli_query($conn , $sql);
    
    $tab=array();

    if($res){
        while ($row = mysqli_fetch_assoc($res)){
            array_push($tab , $row);
        }
        echo json_encode($tab);
    }

    mysqli_close($conn);

?>