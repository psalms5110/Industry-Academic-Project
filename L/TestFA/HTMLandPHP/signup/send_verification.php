<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../../vendor/autoload.php';  // PHPMailer를 사용하기 위해 autoload.php 경로 수정 필요
include '../../path/to/db_config.php';  // 실제 db_config.php 파일 경로

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function generateVerificationCode() {
    return bin2hex(random_bytes(16));  // 강력한 랜덤 인증 코드 생성
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format';
        exit;
    }

    $verificationCode = generateVerificationCode();

    // 데이터베이스에 이메일과 인증 코드 저장
    $sql = "UPDATE users SET verification_code=?, email_verified=0 WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $verificationCode, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // 메일 보내기
        $mail = new PHPMailer(true);
        try {
            // SMTP 서버 설정
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // SMTP 서버 주소
            $mail->SMTPAuth   = true;
            $mail->Username   = 'psalms51100@gmail.com'; // SMTP 서버의 사용자 이름
            $mail->Password   = '686f6e657374'; // SMTP 서버의 비밀번호
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // 수신자 설정
            $mail->setFrom('noreply@project001.com', 'Mailer');
            $mail->addAddress($email); // 수신자 이메일

            // 메일 내용 설정
            $mail->isHTML(true); // HTML 형식의 이메일
            $mail->Subject = '이메일 인증';
            $mail->Body    = "인증 코드: " . $verificationCode;

            $mail->send();
            echo 'Email sent';
        } catch (Exception $e) {
            echo 'Failed to send email. Mailer Error: ' . $mail->ErrorInfo;
        }
    } else {
        echo 'Email not registered';
    }
    $stmt->close();
}
$conn->close();
?>
