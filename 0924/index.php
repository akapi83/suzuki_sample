<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPの練習</title>
</head>

<body>
  <h1>PHPの練習</h1>
  <?php
  // $a = 10;
  // $b = 20;
  // $sum = $a + $b;

  function add($a, $b) {
    $result = $a + $b;
    return $result;
  }
  ?>
  <p>計算結果：<?php echo add(20, 20); ?></p>
</body>

</html>