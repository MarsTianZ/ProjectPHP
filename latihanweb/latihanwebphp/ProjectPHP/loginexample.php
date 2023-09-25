<?php
session_start();

include '../koneksi/koneksi.php';

$error = "";
$username = "";
$ingataku = "";

if(isset($_COOKIE['cookie_username'])){
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "select * from login where username = '$cookie_username'";
    $q1 = mysqli_query($conn,$sql1);
    $r1 = mysqli_fetch_array($q1);
    if($r1['password'] == $cookie_password) {
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if(isset($_SESSION['session_username'])){
    header("location:cobalogin.php");
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
            header("location:cobalogin.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Coba Login</title>
</head>

<body>
    <?php
    if ($error) { ?>
        <div id="login-alert" class="alert alert-danger col-sm-12">
            <ul><?= $error ?></ul>
        </div>
    <?php } ?>
    <form action="" id="loginform" method="post" role="form">
        <table border="1">
            <thead>
                <tr>
                    <input type="text" id="username" class="form-control" name="username" value="<?= $username ?>" placeholder="username">
                </tr>
                <tr>
                    <input type="password" id="password" class="form-control" name="password" placeholder="password">
                </tr>
                <tr>
                    <input type="checkbox" name="ingataku" id="ingataku" value="1" <?php if ($ingataku == '1') echo "checked" ?>> ingat aku
                </tr>
                <tr>
                    <button type="submit" name="login" value="login">Login</button>
                </tr>
            </thead>
        </table>
    </form>
</body>

</html>