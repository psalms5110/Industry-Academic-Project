<?php
$host = 'localhost';
$dbname = 'member';
$username = 'loginuser';
$password = 'a001';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  // POST 방식으로 작동됨.
    $id = mysqli_real_escape_string($conn, $_POST['id']);  // 입력된 ID 처리
    $pw = mysqli_real_escape_string($conn, $_POST['pw']);  // 입력된 PW 처리

    $sql = "SELECT id, username, password FROM users WHERE username = '$id'";  // 입력된 ID에 해당하는 사용자 정보를 조회
    $result = $conn->query($sql);  // SQL 쿼리를 실행하고 결과를 가져옴.

    if ($result->num_rows > 0) {  // 결과가 존재하는 경우
        $row = $result->fetch_assoc();  // 결과에서 한 행을 가져옴
        if (password_verify($pw, $row['password'])) {  // 비밀번호 검증
            $_SESSION['loggedin'] = true;  // 로그인 상태를 true로 설정
            $_SESSION['username'] = $row['username'];  // 세션에 사용자 이름을 저장
            $_SESSION['id'] = $row['id'];  // 세션에 사용자 ID를 저장

            header("Location: board.php");  // 게시판 페이지로 리다이렉트
            exit;  // 종료
        } else {
            echo "<script>alert('비밀번호가 일치하지 않습니다.'); window.location.href='login.php';</script>";  
        }
    } else {
        echo "<script>alert('아이디가 존재하지 않습니다.'); window.location.href='login.php';</script>";  
    }
    $conn->close();  // 데이터베이스 연결 해제
}
?>
