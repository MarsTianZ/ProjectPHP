
<!DOCTYPE html>
<html lang="en">
<body>
<form action="" method = "post">
        <label for="angka1">Nilai 1 :</label>
        <input type="text" name ="nilai1"><br>
        <label for="angka2">Nilai 2 :</label>
        <input type="text" name ="nilai2"><br><br>

        <input type="submit" name ="tambah" value = "tambah">
        <input type="submit" name ="kurang" value = "kurang">
        <input type="submit" name ="kali" value = "kali">
        <input type="submit" name ="bagi" value = "bagi">
        <input type="submit" name ="gnjil" value = "deret ganjil">
        <input type="submit" name ="gnap" value = "deret genap"><br><br>
    
    </form>
    <label for="hasil">Hasil :</label>
    <?php 
    include 'latihankumpulanfungsi.php';
    if (isset($_POST['tambah'])){
        $z = $_POST['nilai1'];
        $d = $_POST['nilai2'];
     echo tambah($z,$d);
    }else if(isset($_POST['kurang'])){
        $z = $_POST['nilai1'];
        $d = $_POST['nilai2'];
     echo kurang($z,$d);
    }else if(isset($_POST['kali'])){
        $z = $_POST['nilai1'];
        $d = $_POST['nilai2'];
     echo kali($z,$d);
    }else if(isset($_POST['bagi'])){
        $z = $_POST['nilai1'];
        $d = $_POST['nilai2'];
     echo bagi($z,$d);
    }else if(isset($_POST['gnjil'])){
        $z = $_POST['nilai1'];
        $d = $_POST['nilai2'];
     echo ganjil($z,$d);
    }else if(isset($_POST['gnap'])){
        $z = $_POST['nilai1'];
        $d = $_POST['nilai2'];
     echo genap($z,$d);
    }
    ?>
</body>
</html>