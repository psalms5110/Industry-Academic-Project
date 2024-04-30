
<?php
// 데이터베이스 연결 정보
$servername = "localhost"; // 데이터베이스 서버의 주소
$username = "loginuser"; // 데이터베이스 사용자 이름
$password = "a001"; // 데이터베이스 사용자 비밀번호
$dbname = "member"; // 데이터베이스 이름

// 데이터베이스 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>