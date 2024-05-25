<?php
// Include database connection
include 'db.php';

$error_message = '';
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if ($new_password === $confirm_password) {
            // Check if username and email exist in the database
            $sql = "SELECT * FROM users WHERE username='$username' AND email='$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // User exists, update the password
                $update_sql = "UPDATE users SET password='$new_password' WHERE username='$username' AND email='$email'";
                if ($conn->query($update_sql) === TRUE) {
                    // Redirect to Find_PW_3.php
                    header("Location: Find_PW_3.php");
                    exit();
                } else {
                    $error_message = "비밀번호 변경 중 오류가 발생했습니다: " . $conn->error;
                }
            } else {
                $error_message = "아이디 또는 이메일이 잘못되었습니다.";
            }
        } else {
            $error_message = "입력한 두 비밀번호가 일치하지 않습니다.";
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>비밀번호 재설정</title>
    <link href="css/Find_PW_2.css" rel="stylesheet">
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
        <h1>비밀번호 재설정</h1>
        <?php if ($error_message): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <?php if ($success_message): ?>
            <p style="color: green;"><?php echo $success_message; ?></p>
        <?php endif; ?>
        <form action="Find_PW_2.php" method="post">
            <input type="hidden" name="username" value="<?php echo htmlspecialchars($_POST['username']); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <div class="form-group">
                <input type="password" name="new_password" placeholder="새 비밀번호" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="새 비밀번호 확인" required>
            </div>
            <div class="button-container">
                <button type="submit" class="submit-button">완료</button>
            </div>
        </form>
    </div>
</body>
</html>
