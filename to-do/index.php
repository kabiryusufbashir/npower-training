

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
    <?php
      if(isset($POST['submit'])){
        if(isset($_POST['username'], $_POST['password'])){
          $username = htmlentities($_POST['username']);
          $password = htmlentities($_POST['password']);
            if(!empty($username)){
              if(!empty($password)){
                echo 'Good to go...';
              }else{
                echo 'Password field empty...<hr />';
              }
            }else{
              echo 'Username field empty...<hr />';
            }
        }
      }
    ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <input type="text" name="username" placeholder="Username"><br>
      <input type="password" name="password" placeholder="Password"><br>
      <input type="submit" name="submit" value="Login">
      <!--<input type="text" name="add" placeholder="Add a To Do">
      <input type="submit" name="submit" value="Add">-->
    </form>
  </body>
</html>
<?php

?>
