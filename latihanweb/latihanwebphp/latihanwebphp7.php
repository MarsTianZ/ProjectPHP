
<head>
   
</head>
<body>
    
<form action="" method = "post">
        <input type="text" name ="nilai1"><br>
        <input type="submit" name ="kirim" value = "kirim">

    </form>
    <?php
    if(isset($_POST['kirim'])){
        switch($_POST['nilai1']){
            case "1": echo"senin";break;
            case "2": echo"selasa";break;
            case "3": echo"rabu";break;
            case "4": echo"kamis";break;
            case "5": echo"jumat";break;
            case "6": echo"sabtu";break;
            case "7": echo"minggu";break;
            default; echo"bingung";
        }
    }
    ?>
</body>
</html>