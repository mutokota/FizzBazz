<!DOCTYPE html>
<html>

<head></head>

<body>
  <?php
  //処理順に気をつける。最初に３の倍数を置いた時に、３と５の倍数の所が、Fizzになってしまった。
  //３の倍数や５の倍数が先に来てしまうと、FizzBazzが表示されないので最初は３と５の倍数を置く。
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 and $i % 5 === 0) {
      echo "FizzBazz<br>";
    } elseif ($i % 3 === 0) {
      echo "Fizz<br>";
    } elseif ($i % 5 === 0) {
      echo "Bazz<br>";
    } else {
      echo "$i<br>";
    }
  }
  ?>
</body>

</html>