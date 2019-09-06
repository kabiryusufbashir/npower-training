<?php
  session_start();
  if(isset($_SESSION['username'], $_SESSION['msg'])){
    $username = $_SESSION['username'];
    $msg = $_SESSION['msg'];
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
    <?php
      include './connect.inc.php';
    ?>
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
                $sql = "INSERT INTO to_do(do) VALUES('{$todo}')";
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
      <div class="">

      <?php
        $todo_display = "SELECT * FROM `to_do`";
          $todo_display = $conn->query($todo_display);
            while($row = mysqli_fetch_array($todo_display)){
              $todo_list = $row['do'];
                echo $todo_list.'<br>';
            }
      ?>

      </div>
    </div>

  </body>
</html>
<?php

?>
