<html>
  <head>
    <title>Task Arithmetic</title>
  </head>
  <body>
    <div class = "title">
      <h1>PHPで四則演算</h1>
    </div>
    <div class = "contents">
      <div class = "list">
      </div>
      <form action = "calc.php" method = "post">
        <p>
          数字を2つ入力してください
          <input type = "text" name = "number1">
          <input type = "text" name = "number2">
        </p>
        <p>
          演算の種類を指定してください
        <select name="calc" size=1>
          <option value = "+">加算</option>
          <option value = "－">減算</option>
          <option value = "×">乗算</option>
          <option value = "÷">除算</option>
        </select>
        </p>
        <p>
          <input type = "submit" value = "計算実行">
          <input type = "reset" value = "入力項目をクリア">
        </p>
       </form>
    </div>
  </body>
</html>



