<?php
// Include database connection
include 'db.php';

// Initialize the ID variable
$id = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Check if email exists in the database
    $sql = "SELECT username, email FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the username and email
        $row = $result->fetch_assoc();
        $id = $row['username'];
        $email = $row['email'];
    } else {
        $id = "해당 이메일로 등록된 아이디가 없습니다.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find ID Result</title>
    <link href="css/Find_ID_2.css" rel="stylesheet">
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
        <h1>아이디 찾기 완료!</h1>
        <div class="result-box">
            <p><strong>아이디:</strong> <?php echo htmlspecialchars($id); ?></p>
            <p><strong>이메일:</strong> <?php echo htmlspecialchars($email); ?></p>
        </div>
        <div class="button-container">
            <button onclick="window.location.href='Find_PW_1.php'">비밀번호 찾기</button>
            <button onclick="window.location.href='login.php'">로그인</button>
        </div>
    </div>
</body>
</html>
