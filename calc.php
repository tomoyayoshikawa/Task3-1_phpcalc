<html>
  <head>
    <title>Answer</title>
  </head>
  <body>
    <?php

      $num1 = $_POST['number1'];
      $num2 = $_POST['number2'];
      $calc = $_POST['calc'];

      switch ($calc) {
        case "+":
          $answer = $num1 + $num2;
          break;
        case "－":
          $answer = $num1 - $num2;
          break;
        case "×":
          $answer = $num1 * $num2;
          break;
        case "÷":
          $answer = $num1 / $num2;
          break;
        default:
          break;
      }

      print ($num1." ".$calc." ".$num2." = ".$answer."\n");
    ?>
    <br />
    <br />
    <a href="#" onclick="history.back(); return false;">前の画面へ戻る</a>
  </body>
</html>
