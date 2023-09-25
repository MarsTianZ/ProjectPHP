<?php
require_once 'controller/anggota_controller.php';
$uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$x = new anggota_controller();
if('/mvc/index.php'===$uri)
{
    $x->index();
}
elseif('/mvc/index.php/isinilai'===$uri)
{
    $x->isinilai();
}
elseif('/mvc/index.php/hitungnilai'===$uri && isset($_POST['nilai1'])&& isset($_POST['nilai2']))
{
    $x->hitungnilai($_POST['nilai1'],$_POST['nilai2']);
}

else
{
    header ('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not 
    Found</h1></body></html>';
}