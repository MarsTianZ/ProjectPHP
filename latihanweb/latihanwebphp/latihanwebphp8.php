
<head>

</head>
<body>
<form action="" method = "post">
        <input type="text" name ="nilai1"><br>
        <input type="submit" name ="kirim" value = "kirim">
    </form>
    <?php 
    if(isset($_POST['kirim'])){
    $x=1;
    while($x<=$_POST['nilai1']){
        echo "nilai =  $x <br>";
        $x++;
    }

    $y=1;
    do{
        echo "nilai =  $y <br>";
        $y++;
    }while($y<=$_POST['nilai1']);

    for($v=1;$v<=$_POST['nilai1']; $v++)
    {
        echo "nilai =  $v <br>";
    }
}
    ?>
</body>
</html>