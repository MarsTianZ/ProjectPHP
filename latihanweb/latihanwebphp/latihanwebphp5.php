
<head>
    
</head>
<body>
   


    <form action="" method = "post">
        <input type="text" name ="nilai1"><br>
        <input type="text" name ="nilai2"><br>
        <input type="submit" name ="kirim" value = "kirim">

    </form>
    <?php
    if(isset($_post['kirim']))
    {
        $b = $_post['nilai1'];
        $a = $_post['nilai2'];
        echo $a+$b;
    }
    ?>
</body>
</html>