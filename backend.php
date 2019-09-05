<link rel="stylesheet" href="./style.css">

<?php
  $fruits = array('mango', 'banana', 'apple', 'orange');
    $fruitsLen = count($fruits);

      echo '<div class="col-fill">'

      echo '<h1>Friuts I love!!!</h1>';

      foreach ($fruits as $type) {
        echo 'I love : '.$type.'<br>';
      }
      echo '</div>';

      echo '<div class="col-fill">'

      echo '<h1>Counting Numbers 1 - 100</h1>';

      for($x=1; $x<=100; $x++){
        echo $x.' ';
      }
      echo '</div>';

      echo '<div class="col-fill">'

      echo '<h1>Functions</h1>';

      function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        return 'The Sum is: '.$sum;
      }

      $result = addFunction(200, 50);
      echo $result;

      echo '</div>';
 ?>
