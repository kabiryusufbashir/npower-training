<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
  </head>
  <body>

    <?php
      include './connect.inc.php';
    ?>

    <div class="to-do">
    <h1>To Do APP</h1>
    <div class="valid_section">
    <?php
      if(isset($_POST['submit'])){
        if(isset($_POST['username'], $_POST['password'])){

          if(isset($_POST['remember'])){
            setcookie('npower', '{$email}', time() * 86400 * 30);
          }

          $username = htmlentities($_POST['username']);
          $password = htmlentities($_POST['password']);
            if(!empty($username)){
              if(!empty($password)){

                $sql_check = "SELECT `fullname` FROM `users` WHERE `fullname`='{$username}' && `password`='{$password}'";
                  if($result = $conn->query($sql_check)){
                    if($result->num_rows > 0){
                      $_SESSION['username'] = $username;
                      $_SESSION['msg'] = 'Welcome to your dashboard '.$username;
                        header('Location: home.php');
                    }else{
                      $sql = "INSERT INTO `users`(fullname, password) VALUES('{$username}', '{$password}')";
                        if($conn->query($sql) === true){
                          $_SESSION['username'] = $username;
                          $_SESSION['msg'] = 'Welcome to your dashboard '.$username;
                            header('Location: home.php');
                            exit();
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
  </div>

  </body>
</html>
<?php

?>
