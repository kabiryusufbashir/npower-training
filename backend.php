<link rel="stylesheet" href="./style.css">

<?php
    echo '<div class="col-fill">';
    echo '
      <form method="POST" action="'.$_SERVER['PHP_SELF'].'">
        <label>Name</label><br>
        <input type="text" name="name" placeholder="Full Name"><br><br>
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Full Name"><br><br>
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
