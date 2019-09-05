<link rel="stylesheet" href="./style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<?php

    echo '<div class="col-fill">';
      echo '<h1>Cookies</h1>';
      setCookie('user', 'Yusuf', time() + 30, "/");

        if(!isset($_COOKIE['user'])){
          echo 'Cookie not set';
        }else{
          echo $_COOKIE['user'];
        }

    echo '</div>';

    echo '<div class="col-fill">';

    if(isset($_POST['submit'])){

      $name = $_POST['email'];
      $email = $_POST['email'];
      $message = $_POST['message'];

        if(!empty($name)){
          if(!empty($email)){
            if(!empty($message)){
              echo '<b>'.$name .'</b> submitted his email as: <b>'.$email.'</b> and a message as: <b>'.$message.'</b><hr>';
            }else{
              echo 'Message field is empty';
            }
          }else{
            echo 'Email field is empty<hr>';
          }
        }else{
          echo 'Name field is empty<hr>';
        }
    }

    echo '
      <form method="POST" action="'.$_SERVER['PHP_SELF'].'">
        <label>Name</label><br>
        <input type="text" name="name" placeholder="Full Name"><br><br>
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <label>Message</label><br>
        <input type="text" name="message" placeholder="Message"><br><br>
        <input type="submit" name="submit" value="Submit"><br>
      </form>
    ';
    echo '</div>';

  $fruits = array('mango', 'banana', 'apple', 'orange');
    $fruitsLen = count($fruits);

      echo '<div class="col-fill">';

      echo '<h1>Friuts I love!!!</h1>';

      foreach ($fruits as $type) {
        echo 'I love : '.$type.'<br>';
      }
      echo '</div>';

      echo '<div class="col-fill">';

      echo '<h1>Counting Numbers 1 - 100</h1>';

      for($x=1; $x<=100; $x++){
        echo $x.' ';
      }
      echo '</div>';

      echo '<div class="col-fill">';

      echo '<h1>Functions</h1>';

      function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        return 'The Sum is: '.$sum;
      }

      $result = addFunction(200, 50);
      echo $result;

      echo '</div>';

      echo '<div class="col-fill">';

      echo '<h1>Functions (Class-Work)</h1>';

      $array_fruits = array('banana', 'apple', 'orange', 'mango');

      function nPower($myfruit, $name){
        return $name .' loved '.$myfruit;
      }

      echo 'From the list of fruits:<br>';

      echo '<div style="border:2px solid #000; margin-top:2%; text-align:center;">';
      foreach ($array_fruits as $fruit_type) {
        echo $fruit_type.'<br>';
      }
      echo '</div>';

      $favorite = nPower('banana', 'Yusuf');
      echo '<br>'.$favorite;

      echo '</div>';

      echo '<div class="col-fill">';

      echo '<h1>Web Concepts</h1>';

      $browser_name = $_SERVER['HTTP_USER_AGENT'];

      echo 'You are browsing on: '.$browser_name;

      echo '</div>';
 ?>
