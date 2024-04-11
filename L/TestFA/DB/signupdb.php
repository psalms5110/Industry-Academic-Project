<?php
// PHPMailer 라이브러리를 포함합니다.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// PHPMailer autoload 파일을 포함합니다.
require 'vendor/autoload.php';

// 데이터베이스 연결을 위한 정보
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

// 이메일 전송 함수
function sendVerificationEmail($email, $verificationCode) {
    // PHPMailer 인스턴스 생성
    $mail = new PHPMailer(true);
    
    try {
        // 서버 설정
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com';  // SMTP 호스트
        $mail->SMTPAuth = true;
        $mail->Username = 'your_smtp_username'; // SMTP 사용자 이름
        $mail->Password = 'your_smtp_password'; // SMTP 비밀번호
        $mail->Port = 587; // SMTP 포트
        $mail->SMTPSecure = 'tls'; // 보안 설정 (tls 또는 ssl)

        // 이메일 설정
        $mail->setFrom('from@example.com', 'Your Name'); // 발신자 이메일 주소 및 이름
        $mail->addAddress($email); // 수신자 이메일 주소
        $mail->Subject = '이메일 인증'; // 이메일 제목
        $mail->Body = '회원 가입을 완료하려면 아래 인증 코드를 입력하세요: ' . $verificationCode; // 이메일 내용

        // 이메일 전송
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

// POST 요청이 들어왔을 때 데이터베이스에 회원 정보를 추가하는 부분
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // SQL 인젝션 방지를 위해 mysqli_real_escape_string 처리
    $name = mysqli_real_escape_string($conn, trim($_POST['name'])); // 이름
    $username = mysqli_real_escape_string($conn, trim($_POST['username'])); // 사용자 이름
    $password = mysqli_real_escape_string($conn, trim($_POST['password'])); // 비밀번호
    $email = mysqli_real_escape_string($conn, trim($_POST['email'])); // 이메일
    $gender = isset($_POST['gender']) ? mysqli_real_escape_string($conn, trim($_POST['gender'])) : ''; // 성별

    // 생년월일 데이터를 받아오는 부분
    $birthYear = isset($_POST['birthYear']) ? mysqli_real_escape_string($conn, $_POST['birthYear']) : null; // 출생 연도
    $birthMonth = isset($_POST['birthMonth']) ? mysqli_real_escape_string($conn, $_POST['birthMonth']) : null; // 출생 월
    $birthDay = isset($_POST['birthDay']) ? mysqli_real_escape_string($conn, $_POST['birthDay']) : null; // 출생 일

    // 인증 코드 생성
    $verificationCode = mt_rand(100000, 999999);

    // 이메일 인증 메일 전송
    if (sendVerificationEmail($email, $verificationCode)) {
        // 이메일 전송 성공 시 사용자의 이메일 주소 및 인증 코드를 데이터베이스에 저장하거나 세션에 저장합니다.
        // 세션 사용 예: $_SESSION['email'] = $email; $_SESSION['verification_code'] = $verificationCode;
    } else {
        // 이메일 전송 실패 시 적절한 오류 처리
    }

    // 비밀번호를 해시화
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL 쿼리를 통해 회원 정보를 데이터베이스에 추가
    $sql = "INSERT INTO users (name, username, password, email, gender, birthYear, birthMonth, birthDay, verificationCode) 
            VALUES ('$name', '$username', '$hashed_password', '$email', '$gender', '$birthYear', '$birthMonth', '$birthDay', '$verificationCode')";

    // 쿼리 실행 후 성공 시 로그인 페이지로 리다이렉트
    if ($conn->query($sql) === TRUE) {
        header('Location: login.php');
        exit;
    } else {
        // 쿼리 실행 실패 시 오류 메시지 출력
        echo "오류: " . $sql . "<br>" . $conn->error;
    }
}

// 데이터베이스 연결 종료는 signup.php에서 관리할 것이므로 여기에는 추가하지 않습니다.
?>
