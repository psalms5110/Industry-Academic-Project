<?php
session_start();

// Include database connection
include 'db.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['id'];
    $password = $_POST['pw'];

    // Check if user exists in the database
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, set session variables and redirect to index.php
        $_SESSION['username'] = $username;
        header("Location: Index.php");
        exit();
    } else {
        // User not found, display error message
        $error_message = "아이디 또는 비밀번호가 잘못되었습니다.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
    
    <div class="login-container">
        <div id="login_wrap" class="wrap">
            <h2>로그인</h2>
            <?php if (isset($error_message)): ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <form class="login-form" action="login.php" method="post">
                <input type="text" name="id" placeholder="아이디" required>
                <input type="password" name="pw" placeholder="비밀번호" required>
                <label>
                    <input type="checkbox" name="remember"> 자동 로그인
                </label>
                <input type="submit" value="로그인">
                <div class="link-container">
                    <a href="Find_ID_1.php">ID 찾기</a> 
                    <a href="findpw.php">PW 찾기</a> 
                    <a href="Register1.php">회원가입</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
