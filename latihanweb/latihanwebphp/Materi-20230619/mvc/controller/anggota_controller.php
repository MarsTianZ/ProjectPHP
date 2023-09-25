<?php
require_once 'model/anggota_model.php';
class anggota_controller{
  public function index()
  {
    echo "Belajar MVC";
  }
  public function isinilai()
  {
    require 'view/isinilai.php';
  }
  public function hitungnilai($a,$b)
  {
    $m = new anggota_model();
    echo $m->penjumlahan($a,$b);
    
  }

}