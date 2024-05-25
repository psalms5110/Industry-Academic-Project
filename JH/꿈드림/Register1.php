<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원 가입</title>
    <link href="css/Register1.css" rel="stylesheet">
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
                <a href="#"><img src="path_to_search_icon" alt="Search"></a>
                <a href="login.php">로그인</a>
            </nav>
        </div>
    </div>
    
    <div class="container">
        <h1>회원 가입</h1>
        <form action="Register2.php" method="POST">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="아이디" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="비밀번호" required>
            </div>
            <div class="form-group">
                <input type="password" id="confirm_password" name="confirm_password" placeholder="비밀번호 확인" required>
            </div>
            <div class="button-container">
                <button type="submit">다음</button>
            </div>
        </form>
    </div>
</body>
</html>
