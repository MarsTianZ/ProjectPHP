<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    require_once('../koneksi/koneksi.php');
    require_once "validate.php";

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $sql = "INSERT into Users VALUES('', '$name', '$email', '$password')";

    if(!$conn -> query($sql)){
        echo "Failure";
    } else {
        echo "Success";
    }
}

?>