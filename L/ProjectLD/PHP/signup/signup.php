<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/PHP/signup/vendor/autoload.php';

$host = 'localhost';
$dbname = 'member';
$username = 'signupuser';
$password = 'b001';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['send_verification'])) {
        $email = mysqli_real_escape_string($conn, trim($_POST['email']));
        $verification_code = rand(100000, 999999);

        session_start();
        $_SESSION['verification_code'] = $verification_code;
        $_SESSION['email'] = $email;

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'psalms51100@gmail.com';
            $mail->Password = '686f6e657374';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('psalms51100@gmail.com', 'Mailer');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Verification Code';
            $mail->Body    = "Your verification code is $verification_code";

            $mail->send();
            echo "Verification email sent. Please check your email.";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } elseif (isset($_POST['verify_code'])) {
        session_start();
        if ($_POST['verification_code'] == $_SESSION['verification_code']) {
            $_SESSION['verified'] = true;
            echo "Verification successful.";
        } else {
            echo "Invalid verification code.";
        }
    } elseif (isset($_POST['submit'])) {
        session_start();
        if ($_SESSION['verified'] && $_SESSION['email'] == $_POST['email']) {
            $name = mysqli_real_escape_string($conn, trim($_POST['name']));
            $username = mysqli_real_escape_string($conn, trim($_POST['username']));
            $password = mysqli_real_escape_string($conn, trim($_POST['password']));
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $email = mysqli_real_escape_string($conn, trim($_POST['email']));
            $gender = isset($_POST['gender']) ? mysqli_real_escape_string($conn, trim($_POST['gender'])) : '';
            $birthYear = isset($_POST['birthYear']) ? mysqli_real_escape_string($conn, $_POST['birthYear']) : null;
            $birthMonth = isset($_POST['birthMonth']) ? mysqli_real_escape_string($conn, $_POST['birthMonth']) : null;
            $birthDay = isset($_POST['birthDay']) ? mysqli_real_escape_string($conn, $_POST['birthDay']) : null;

            $sql = "INSERT INTO users (name, username, password, email, gender, birthYear, birthMonth, birthDay) 
                    VALUES ('$name', '$username', '$hashed_password', '$email', '$gender', '$birthYear', '$birthMonth', '$birthDay')";

            if ($conn->query($sql) === TRUE) {
                header('Location: ../login/login.php');
                exit;
            } else {
                echo "오류: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Email not verified.";
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원 가입</title>
    <link href="../../styles/signup.css" rel="stylesheet">
    <script>
        // 사용자의 이메일로 인증 코드를 전송하는 함수
        function sendVerificationCode() {
            var email = document.getElementById('email').value; // 이메일 입력 필드에서 이메일 값을 가져옴
            var xhr = new XMLHttpRequest(); // 새로운 XMLHttpRequest 객체를 생성
            xhr.open('POST', 'signup.php', true); // signup.php로 POST 요청 초기화
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); // 요청 헤더 설정
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) { // 요청이 완료되고 성공적인지 확인
                    document.getElementById('verification-status').innerText = xhr.responseText; // 서버 응답을 표시
                }
            };
            xhr.send('send_verification=1&email=' + email); // 이메일 파라미터와 함께 요청 전송
        }

        // 사용자가 입력한 코드를 검증하는 함수
        function verifyCode() {
            var code = document.getElementById('verification_code').value; // 인증 코드 입력 필드에서 값을 가져옴
            var xhr = new XMLHttpRequest(); // 새로운 XMLHttpRequest 객체를 생성
            xhr.open('POST', 'signup.php', true); // signup.php로 POST 요청 초기화
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); // 요청 헤더 설정
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) { // 요청이 완료되고 성공적인지 확인
                    document.getElementById('verification-status').innerText = xhr.responseText; // 서버 응답을 표시
                }
            };
            xhr.send('verify_code=1&verification_code=' + code); // 인증 코드 파라미터와 함께 요청 전송
        }
    </script>
</head>
<body>

<div class="signup-container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label><strong>[ 필수 ]</strong></label>
        <div class="form-group">
            <input type="text" id="name" name="name" placeholder="이름" required>
            <input type="text" id="username" name="username" placeholder="ID" required>
            <input type="password" id="password" name="password" placeholder="PW" required>
        </div>

        <div class="form-group-email">
            <input type="email" id="email" name="email" placeholder="E-Mail" required>
            <button type="button" onclick="sendVerificationCode()">본인 확인 코드 전송</button>
        </div>

        <div class="verification-container">
            <input type="text" id="verification_code" name="verification_code" placeholder="Verification Code">
            <button type="button" onclick="verifyCode()">코드 확인</button>
            <div id="verification-status"></div>
        </div>

        <button type="submit" name="submit">회원 가입</button>
    </form>
</div>

</body>
</html>
