<?php
include '../../path/to/db_config.php';  // db_config.php 파일의 경로를 정확히 지정하세요

function generateVerificationCode() {
    return bin2hex(random_bytes(16));  // 강력한 랜덤 인증 코드 생성
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $verificationCode = generateVerificationCode();

    // 데이터베이스에 이메일과 인증 코드 저장
    $sql = "UPDATE users SET verification_code=?, email_verified=0 WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $verificationCode, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // 메일 보내기
        $subject = "이메일 인증";
        $message = "인증 코드: " . $verificationCode;
        $headers = 'From: noreply@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($email, $subject, $message, $headers);
        echo 'Email sent';
    } else {
        echo 'Email not registered';
    }
    $stmt->close();
}
$conn->close();
?>