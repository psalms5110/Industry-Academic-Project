<?php

$host = 'localhost'; // 호스트 이름
$dbname = 'member'; // 데이터베이스 이름
$username = 'signupuser'; // 데이터베이스 사용자 이름
$password = 'b001'; // 데이터베이스 사용자 비밀번호

// 데이터베이스 연결
$conn = new mysqli($host, $username, $password, $dbname);

// 데이터베이스 연결 실패 시 오류 메시지 출력 후 종료
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>