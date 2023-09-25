<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
<form action="" method = "post">
        <input type="text" name ="nilai1"><br>
        <input type="submit" name ="kirim" value = "kirim">
    </form>
    <?php 
    if(isset($_POST['kirim'])){
  
$t = array("1","2","3");
$z = $_POST['nilai1'];
        echo $t[$_POST['nilai1']] ;
    
}
    ?>
</body>
</html>