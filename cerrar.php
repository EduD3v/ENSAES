<?php
  session_start();
  session_destroy();
  
  header("Location: /ensaes/index.php");
?>