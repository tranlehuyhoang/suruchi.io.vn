<?php 
  session_start();
  
  if(!isset($_SESSION["giohang"])) {
    echo json_encode([]);
  }
  
  echo json_encode($_SESSION['giohang']);
?>