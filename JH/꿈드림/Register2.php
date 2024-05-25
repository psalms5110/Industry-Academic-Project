<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원 가입</title>
    <link href="css/Register2.css" rel="stylesheet">
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
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
            // Include database connection
            include 'db.php';

            // Get data from previous form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Check if final form is submitted
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['verification_code'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $verification_code = $_POST['verification_code'];

                // Insert data into database
                $sql = "INSERT INTO users (username, password, name, email) VALUES ('$username', '$password', '$name', '$email')";
                
                if ($conn->query($sql) === TRUE) {
                    // Redirect to Register3.php with user details
                    header("Location: Register3.php?name=$name&username=$username&email=$email");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            } else {
                // Display the form for name, email and verification code
                echo '<form action="" method="POST">
                        <input type="hidden" name="username" value="' . htmlspecialchars($username) . '">
                        <input type="hidden" name="password" value="' . htmlspecialchars($password) . '">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="실명" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="이메일" required>
                        </div>
                        <button type="button" class="verification">인증 메일 발송</button>
                        <div class="form-group">
                            <input type="text" id="verification_code" name="verification_code" placeholder="인증번호" required>
                        </div>
                        <div class="button-container">
                            <button type="submit" class="complete">완료</button>
                        </div>
                    </form>';
            }
        } else {
            echo "잘못된 접근입니다.";
        }
        ?>
    </div>
</body>
</html>
