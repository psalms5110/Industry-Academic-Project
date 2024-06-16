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

            $mail->setFrom('your-email@gmail.com', 'Mailer');
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
            <button type="submit" name="send_verification">본
