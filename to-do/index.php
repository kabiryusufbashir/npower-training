

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
    <div class="valid_section">
    <?php
      if(isset($_POST['submit'])){
        if(isset($_POST['username'], $_POST['password'])){
          $username = htmlentities($_POST['username']);
          $password = htmlentities($_POST['password']);
            if(!empty($username)){
              if(!empty($password)){

                $sql_check = "SELECT email FROM users WHERE `email`='{$username}'";
                  if($result = $conn->query($sql_check)){
                    if($result->num_rows > 0){
                      echo 'Username already exits';
                    }else{
                      $sql = "INSERT INTO users(fullname, password) VALUES('{$username}', '{$password}')";
                        if($conn->query($sql) === true){
                          echo 'You have successfully registered';
                        }
                    }
                  }
              }else{
                echo 'Password field empty...<hr />';
              }
            }else{
              echo 'Username field empty...<hr />';
            }
        }
      }
    ?>
  </div>
    <form action="index.php" method="POST">
      <input type="text" name="username" placeholder="Username"><br>
      <input type="password" name="password" placeholder="Password"><br>
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>
<?php

?>
