<?php

 session_start();
 session_destroy();
 echo "<script> location.href = 'requester/index.php'; </script>";
 
?>