
<head>
   
</head>
<body>
<form action="" method = "post">
        <input type="text" name ="nilai1"><br>
        <input type="submit" name ="kirim" value = "kirim">
    </form>
    <?php 
    function tampil(){
echo "halo";
    }
    function tambah($z){
        echo 2*$z;  
    }
    function bagi($z){
        echo 2/$z;
    }
    if (isset($_POST['kirim'])){
        tampil();echo "<br>";
        tambah($_POST['nilai1']);echo "<br>";
        bagi($_POST['nilai1']);
    }
    
    ?>
</body>
</html>