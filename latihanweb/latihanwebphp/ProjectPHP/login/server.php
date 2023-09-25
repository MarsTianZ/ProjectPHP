<?php
session_start();

// initializing variables
$username = "localhost";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');


?>