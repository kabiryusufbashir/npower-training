<?php
  session_start();

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
    <h1>To Do APP</h1>
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
      hhgghghghsghhgsghghsghdghsgdh
    </div>

  </body>
</html>
<?php

?>
