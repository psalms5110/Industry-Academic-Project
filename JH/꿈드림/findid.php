<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find ID</title>
    <link href="../css/findid.css" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <img src="css/image/top_logo.png" alt="Logo">
            </div>
            <nav class="navbar-links">
                <a href="#">이론</a>
                <a href="#">워게임</a>
                <a href="#">커뮤니티</a>
                <a href="#">퀴즈</a>
                <a href="#"><img src="----" alt="Search"></a>
                <a href="login.php">로그인</a>
            </nav>
        </div>
    </div>
    <div class="container">
        <h1>아이디 찾기</h1>

        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="이메일" required>
        </div>
        
        <div class="button-container">
            <button type="button">인증 메일 발송</button>
        </div>

        <div class="verification-container">
            <div class="verification-input-group">
                <input type="text" id="verification_code" name="verification_code" placeholder="인증번호" required>
            </div>
        </div>
        
        <input type="submit" value="다음" class="submit-button">
    </div>
</body>
</html>
