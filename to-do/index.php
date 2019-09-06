

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <?php
      $conn = mysqli_connect('localhost', 'root', 'K@rn@ugh123', 'npower_training');
        if($conn->connect_error){
          die('Database Connection Failed');
        }else{
          echo '<h1>We are connected</h2>';
        }
    ?>
    <h1>To Do APP</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <input type="text" name="add" placeholder="Add a To Do">
      <input type="submit" name="submit" value="Add">
    </form>
  </body>
</html>
<?php

?>
