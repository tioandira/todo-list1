<?php
  $config = new mysqli ("localhost","root","","todo");
  if($config){
    echo "berhasil";
  }else {
    echo "gagal";
  }
?>
