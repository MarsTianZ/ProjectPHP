
<head>
    
</head>
<body>
   


    <form action="" method = "post">
        <input type="text" name ="nilai1"><br>
        <input type="text" name ="nilai2"><br>
        <input type="submit" name ="kirim" value = "kirim">

    </form>
    <?php
    if(isset($_POST['kirim']))
    {
        if($_POST['nilai1']>10){
            echo"lebih 10";
        }
        else{
            echo"gak tau";
        }
    }
    ?>
</body>
</html>