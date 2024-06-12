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
    <link href="../css/login.css" rel="stylesheet">
</head>
<body> 
<div class="login-container">
    <div class="logo">
            <img src="../css/image/loginlogo.png" alt="ARES 로고">
            <div id="login_wrap" class="wrap">   
        <form class="login-form" action="login.php" method="post">
            <input type="text" name="id" placeholder="ID" required>
            <input type="password" name="pw" placeholder="PW" required>
            <label>
                <input type="checkbox" name="remember"> 자동 로그인
            </label>
            <input type="submit" value="로그인">
        </form> 
</div>
        <div class="link-container">
        <a href="findid.php">ID 찾기</a> |
        <a href="findpw.php">PW 찾기</a> |
        <a href="signup.php">회원가입</a>
</div>
</body>
</html>