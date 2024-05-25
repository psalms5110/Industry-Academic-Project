<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find PW</title>
    <link href="css/Find_PW_1.css" rel="stylesheet">
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
        <h1>비밀번호 찾기</h1>
        <form action="Find_PW_2.php" method="post">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="아이디" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="이메일" required>
            </div>
            
            <div class="button-container">
                <button type="button" class="verification-button">인증 메일 발송</button>
            </div>

            <div class="form-group">
                <div class="verification-input-group">
                    <input type="text" id="verification_code" name="verification_code" placeholder="인증번호" required>
                </div>
            </div>
            
            <div class="button-container">
                <button type="submit" class="submit-button">완료</button>
            </div>
        </form>
    </div>
</body>
</html>
