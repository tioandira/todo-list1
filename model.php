<?php
include "config.php";

function getTodo($config){
  $q = $config->query("select * from tbTodo");
  while ($r = $q->fetch_assoc()){
    $ret[] = $r;
  }
  return $ret;
}
?>
