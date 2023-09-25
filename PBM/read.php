<?php
include 'Db_config.php';
$sql = "select * from myorder_210021";
$hasil =  mysqli_query($db,$sql);
//cek akses table
//print_r($hasil);
echo '<p>List item</p>';
if(mysqli_num_rows($hasil)>0)
{
    while($isi=mysqli_fetch_assoc($hasil))
    {
        echo $isi["Item"];
        echo '<br>';

    }
}
?>
