<?php
session_start();

$host = 'localhost';
$dbname = 'member';
$username = 'root';
$password = 'ares123';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $pw = mysqli_real_escape_string($conn, $_POST['pw']);

    $sql = "SELECT id, username, password FROM users WHERE username = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($pw, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];

            header("Location: board.php");
            exit;
        } else {
            echo "<script>alert('비밀번호가 일치하지 않습니다.'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('아이디가 존재하지 않습니다.'); window.location.href='login.php';</script>";
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
            <form class="login-form" action="login.php" method="post">
                <input type="text" name="id" placeholder="아이디" required>
                <input type="password" name="pw" placeholder="비밀번호" required>
                <label>
                    <input type="checkbox" name="remember"> 자동 로그인
                </label>
                <input type="submit" value="로그인">
                <div class="link-container">
                    <a href="findid.php">ID 찾기</a> 
                    <a href="findpw.php">PW 찾기</a> 
                    <a href="signup.php">회원가입</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
