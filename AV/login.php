<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = mysqli_query($conn, "select * from login where username='$username' and password='$password'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location:ceklogin.php");
} else {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Data Admin MarsTianZ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <style>
        .pg {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }

        input[type=text],
        [type=password] {
            font-size: 18px;
            font-family: sans-serif;
            width: 100%;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 1px solid #000000;
            color: rgb(0, 0, 0);
            outline: none;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .success {
            color: green;
            margin-left: 80px;
            text-align: center;
            font: 15px;
        }

        .card {
            width: 50%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #B0C4DE;
            background: white;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 1px 1px 8px 1px #000;
        }
    </style>

</head>

<body>
    <div class="bg-container pg" role="alert">
        <?php echo $_SESSION['error'] ?>
        <div class="card mb-3 position-fixed top-50 start-50 translate-middle" style=" margin-right:auto; margin-left:auto;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="themes/signup.png" class="img-thumbnail" style="width: 350px; height: 300px;" alt="Login">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Login</h3>
                        <!-- Add the error message display section in the HTML form -->
                        <form method="POST" action="">
                            <div class="form-group">
                                <!-- <label for="username">Username:</label> -->
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class=" form-group">
                                <!-- <label for="password">Password:</label> -->
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <p class="card-text fst-italic"><small><a class="link-offset-2" href="https://www.google.com">Lupa Password?</a></small></p>
                            <div class="d-grid gap-1"><button type="submit" class="btn btn-outline-primary">Login</button></div>
                        </form><br>
                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                        <p align="center" class="card-text"><small class="text-body-secondary">atau login dengan </small>
                            <button align="center" a href="#" type="button" class="btn btn-danger rounded-circle" style="padding: 2px 7px;"><i class="fa fa-google"></i></button>
                            <button align="center" a href="#" type="button" class="btn btn-primary rounded-circle" style="padding: 2px 9px;"><i class="fa fa-facebook"></i></button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>