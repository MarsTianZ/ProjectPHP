<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<form action="" method = "post">
        <input type="text" name ="nilai1"><br>
        <input type="text" name ="nilai2"><br>

        <input type="submit" name ="kirim" value = "kirim">
    </form>
    <?php 
    include 'kumpulanfungsi.php';
  
    if (isset($_POST['kirim'])){
        $z = $_POST['nilai1'];
        $d = $_POST['nilai2'];

     echo tambah($z,$d);
     
    }

    ?>
</body>
</html>