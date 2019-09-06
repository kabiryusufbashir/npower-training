<?php
  session_start();
  include './connect.inc.php';

  if(isset($_SESSION['username'], $_SESSION['msg'])){
    $username = $_SESSION['username'];
    $msg = $_SESSION['msg'];
      $sql_user_id = "SELECT `id` FROM `users` WHERE `fullname`='{$username}'";
      $user_id_display = $conn->query($sql_user_id);

      if($user_id_row = mysqli_fetch_array($user_id_display)){
        $user_id = $user_id_row['id'];
      }

  }else{
    header('Location: ./index.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>

    <h1><?php echo $msg; ?></h1>
    <h3>To Do APP</h3>
    <div class="to-do">
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="add" placeholder="Add a To Do">
        <input type="submit" name="submit" value="Add">
      </form>
      <?php
        if(isset($_POST['submit'])){
          if(isset($_POST['add'])){
            $todo = htmlentities($_POST['add']);
              if(!empty($todo)){
                $sql = "INSERT INTO to_do(do, user_id) VALUES('{$todo}', '{$user_id}')";
                    if($conn->query($sql)){
                      echo $todo .' Added';
                    }else{
                      echo 'Please try again...';
                    }
              }else{
                echo 'ToDo field is empty';
              }
          }
        }
      ?>

      <?php
        $todo_display = "SELECT * FROM `to_do` WHERE `user_id`='{$user_id}' ORDER BY `id` DESC";
          $todo_display = $conn->query($todo_display);
            while($row = mysqli_fetch_array($todo_display)){
              $todo_list = $row['do'];
                echo '<div class="todo_table">';

                  echo '<div class="items">';
                  echo $todo_list;
                  echo '</div>';

                  echo '<div class="btn">';
                  echo '<span><input type="submit" value="Update"></span>';
                  echo '<span><input type="submit" value="Delete"></span>';
                  echo '</div>';

                echo '</div>';
                echo '<br>';
            }
      ?>

      </div>
    </div>

  </body>
</html>
<?php

?>
