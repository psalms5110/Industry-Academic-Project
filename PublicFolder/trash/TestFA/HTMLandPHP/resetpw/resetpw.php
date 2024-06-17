<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PW 재설정</title>
    <link href="../../styles/resetpw.css" rel="stylesheet">
  </head>
  <body>
    <form action="resetpw.php" method="POST">
      <div class="container">
        <h1>PW 재설정</h1>
        <p><input type="password" id="current_password" name="current_password" placeholder="현재 비밀번호" required></p>
        
          <div class="new_password">
            <p><input type="password" id="new_password" name="new_password" placeholder="새 비밀번호" required></p>
            <p><input type="password" id="new_password_confirm" name="new_password_confirm" placeholder="새 비밀번호 확인" required></p>
            <p><input type="submit" value="비밀번호 변경"></p>
          </div>
    </form>
</div>
  </body>
</html>