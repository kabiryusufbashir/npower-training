<?php
  $conn = mysqli_connect('localhost', 'root', 'K@rn@ugh123', 'npower_training');
    if($conn->connect_error){
      die('Database Connection Failed');
    }else{
      echo '<h1>We are connected</h2>';
    }
?>
