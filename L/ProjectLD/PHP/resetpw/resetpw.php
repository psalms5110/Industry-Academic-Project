<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PW 재설정</title>
    <link href="../styles/resetpw.css" rel="stylesheet">
  </head>
  <body>
    <form action="resetpw.php" method="POST">
      <div class="container">
        <div class= "current_pwd">
          <label for="current_pwd"> 현재 비밀번호</label>
          <input type="password" id="current_password" name="current_password" required></p>
        
          <div class="new_password">
            <label for="new_pwd"> 새 비밀번호</label>
            <input type="password" id="new_password" name="new_password" required>
            <label for="new_pwd_confirm"> 새 비밀번호 확인</label>
            <input type="password" id="new_password_confirm" name="new_password_confirm" required></p>
            <p><input type="submit" value="비밀번호 변경"></p>
          </div>
    </form>
</div>
  </body>
</html>