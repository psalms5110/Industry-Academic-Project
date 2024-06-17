<?php
$host = 'localhost';
$dbname = 'member';
$username = 'signupuser';
$password = 'signuppass1234';


// PDO 객체 생성 및 에러 모드 설정
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 회원가입 폼 데이터 수신
$name = $_POST['name'];
$username = $_POST['username'];
$raw_password = $_POST['password'];
$email = $_POST['email'];

// 비밀번호 해싱
$password = password_hash($raw_password, PASSWORD_DEFAULT);

try {
    // SQL 쿼리 준비
    $sql = "INSERT INTO users (name, username, password, email) VALUES (?, ?, ?, ?)";

    // SQL 쿼리 실행
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $username, $password, $email]);

    echo "회원가입이 완료되었습니다.";
} catch (PDOException $e) {
    echo "오류 발생: " . $e->getMessage();
}
?>
