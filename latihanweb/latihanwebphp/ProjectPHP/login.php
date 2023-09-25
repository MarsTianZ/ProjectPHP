<?php
session_start();

include 'koneksi/koneksi.php';

$error = "";
$username = "";
$ingataku = "";

if (isset($_COOKIE['cookie_username'])) {
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "select * from login where username = '$cookie_username'";
    $q1 = mysqli_query($conn, $sql1);
    $r1 = mysqli_fetch_array($q1);
    if ($r1['password'] == $cookie_password) {
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if (isset($_SESSION['session_username'])) {
    header("location:index.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ingataku = $_POST['ingataku'];

    if ($username == '' or $password == '') {
        $error = "<li>Username dan password belum terisi</li>";
    } else {
        $sql1 = "select * from login where username = '$username'";
        $q1 = mysqli_query($conn, $sql1);
        $r1 = mysqli_fetch_array($q1);

        if ($r1['username'] == '') {
            $error .= "<li>Username <b>$username</b> tidak ditemukan</li>";
        } elseif ($r1['password'] != md5($password)) {
            $error .= "<li>Password tidak ditemukan.</li>";
        }
        if (empty($error)) {
            $_SESSION['session_username'] = $username;
            $_SESSION['session_password'] = md5($password);

            if ($ingataku == 1) {
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");

                $cookie_name = "cookie_password";
                $cookie_value = md5($password);
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
            }
            header("location:index.php");
        }
    }
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
        <?php
        if ($error) { ?>
            <div id="login-alert" class="alert alert-danger col-sm-12">
                <ul><?= $error ?></ul>
            </div>
        <?php } ?>
        <div class="card mb-3 position-fixed top-50 start-50 translate-middle" style=" margin-right:auto; margin-left:auto;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="themes/signup.png" class="img-thumbnail" style="width: 350px; height: 300px;" alt="Login">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Login</h3>
                        <!-- Add the error message display section in the HTML form -->
                        <form method="POST" id="loginform" action="" role="form">
                            <div class="form-group">
                                <!-- <label for="username">Username:</label> -->
                                <input type="text" class="form-control" id="username" name="username" value="<?= $username ?>" placeholder="Username">
                            </div>
                            <div class=" form-group">
                                <!-- <label for="password">Password:</label> -->
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="ingataku" value="1"
                                        <?php if($ingataku == '1') echo "checked"?>> Remember Me
                                    </label>
                                </div>
                            </div>
                            <p class="card-text fst-italic"><small><a class="link-offset-2" href="https://www.google.com">Lupa Password?</a></small></p>
                            <div class="d-grid gap-1"><button type="submit" name="login" value="Login" class="btn btn-outline-primary">Login</button></div>
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