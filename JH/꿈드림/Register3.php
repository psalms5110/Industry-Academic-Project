<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원 가입 완료</title>
    <link href="css/Register3.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>회원 가입 완료!</h1>
        <div class="info-box">
            <p><strong>성 함:</strong> <?php echo htmlspecialchars($_GET['name']); ?></p>
            <p><strong>아이디:</strong> <?php echo htmlspecialchars($_GET['username']); ?></p>
            <p><strong>이메일:</strong> <?php echo htmlspecialchars($_GET['email']); ?></p>
        </div>
        <div class="button-container">
            <button onclick="window.location.href='index.php'">메인으로 이동</button>
            <button onclick="window.location.href='login.php'">로그인</button>
        </div>
    </div>
</body>
</html>
