<?php

if(isset($_POST['email']) && isset($_POST['password'])){
    require_once('../koneksi/koneksi.php');
    require_once "validate.php";

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $sql = "SELECT * FROM Users Where email = '$email' AND password = '$password'";

    $result = $conn -> query($sql);
    if($result -> num_rows > 0){
        echo "Success";
    } else {
        echo "Failure";
    }
}
?>