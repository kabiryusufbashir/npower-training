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
        if(isset($_GET['todo_list_id_del'])){
          $selected_id = $_GET['todo_list_id_del'];
            if(!empty($selected_id)){
              $del_item = "DELETE FROM `to_do` WHERE `id`='{$selected_id}'";
                if($del_result = $conn->query($del_item)){
                  echo 'Deleted';
                }else{
                  echo 'Error: Please try again...';
                }
            }else{
              header('Location: ./home.php');
            }
        }
      ?>

      <?php
        $todo_display = "SELECT * FROM `to_do` WHERE `user_id`='{$user_id}' ORDER BY `id` DESC";
          $todo_display = $conn->query($todo_display);
            while($row = mysqli_fetch_array($todo_display)){
              $todo_list_id = $row['id'];
              $todo_list = $row['do'];
                echo '<div class="todo_table">';

                  echo '<div class="items">';
                  echo $todo_list;
                  echo '</div>';
                    echo '<div class="btn">';
                      echo '<span><a href="home.php?todo_list_id_update='.$todo_list_id.'"><input name="update" type="submit" value="Update"></a></span>';
                      echo '&nbsp;&nbsp;&nbsp;';
                      echo '<span><a href="home.php?todo_list_id_del='.$todo_list_id.'"><input name="delete" style="background:red;" type="submit" value="Delete"></a></span>';
                    echo '</div>';
                echo '</div>';
                echo '<br>';
            }
      ?>

      <?php
        if(isset($_GET['todo_list_id_update'])){
          $selected_id_update = $_GET['todo_list_id_update'];
            if(!empty($selected_id_update)){
              $sql_item_name = "SELECT `do` FROM `to_do` WHERE `id`='{$selected_id_update}'";
              $item_display_query = $conn->query($sql_item_name);
                if($item_display = mysqli_fetch_array($item_display_query)){
                  $do_update = $item_display['do'];

                    if(isset($_POST['update'])){
                      if(isset($_POST['update_item_id'], $_POST['update_item_value'])){
                        $update_item_id = htmlentities($_POST['update_item_id']);
                        $update_item_value = htmlentities($_POST['update_item_value']);
                          $update = "UPDATE `to_do` SET `do`='{$update_item_value}' WHERE `id`='{$update_item_id}'";
                            if($update_run = $conn->query($update)){
                              header('Location: ./home.php');
                            }else{
                              echo 'Error: please try again...';
                            }
                      }
                    }

                }
              echo '<hr />
              <form action="home.php?todo_list_id_update='.$todo_list_id.'" method="post">
                <input type="text" name="update_item_id" value="'.$selected_id_update.'" style="display:none;">
                <input type="text" name="update_item_value" placeholder="Update '.$do_update.' To...">
                <input type="submit" name="update" value="Update">
              </form>
              ';
            }else{
              header('Location: ./home.php');
            }
        }
      ?>

      </div>
    </div>

  </body>
</html>
<?php

?>
