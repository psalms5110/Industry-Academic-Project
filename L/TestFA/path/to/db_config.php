<?php

$host = 'localhost';
$dbname = 'member';
$username = 'signupuser';
$password = 'signuppass1234';

// 데이터베이스 연결
$conn = new mysqli($host, $username, $password, $dbname);

// 데이터베이스 연결 실패 시 오류 메시지 출력 후 종료
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

?>