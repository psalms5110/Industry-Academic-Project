<?php
$host = 'localhost';
$dbname = 'member';
$username = 'root';
$password = 'ares123';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $gender = isset($_POST['gender']) ? mysqli_real_escape_string($conn, trim($_POST['gender'])) : '';

    $birthYear = isset($_POST['birthYear']) ? mysqli_real_escape_string($conn, $_POST['birthYear']) : null;
    $birthMonth = isset($_POST['birthMonth']) ? mysqli_real_escape_string($conn, $_POST['birthMonth']) : null;
    $birthDay = isset($_POST['birthDay']) ? mysqli_real_escape_string($conn, $_POST['birthDay']) : null;

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, username, password, email, gender, birthYear, birthMonth, birthDay) 
            VALUES ('$name', '$username', '$hashed_password', '$email', '$gender', '$birthYear', '$birthMonth', '$birthDay')";

    if ($conn->query($sql) === TRUE) {
        header('Location: login.php');
        exit;
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원 가입</title>
    <link href="../css/signup.css" rel="stylesheet">
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

            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="E-Mail" required>
                <button type="button">본인 확인 메일 발송</button>
            </div>

            <div class="verification-container">
                <input type="text" id="verification_code" name="verification_code" placeholder="인증번호" required>
                 <button type="button" id="verification_button">인증</button>
            </div>

            <label><strong>[ 선택 ]</strong><small> *정보수집 용도</small></label>
            <div class="form-group">
                <label for="birthday">생년월일</label>
                <select id="birthYear" name="birthYear"><?php for($year = date('Y'); $year >= date('Y') - 100; $year--): ?><option value="<?php echo $year; ?>"><?php echo $year; ?></option><?php endfor; ?></select>
                <select id="birthMonth" name="birthMonth"><?php for($month = 1; $month <= 12; $month++): ?><option value="<?php echo $month; ?>"><?php echo $month; ?></option><?php endfor; ?></select>
                <select id="birthDay" name="birthDay"><?php for($day = 1; $day <= 31; $day++): ?><option value="<?php echo $day; ?>"><?php echo $day; ?></option><?php endfor; ?></select>
            </div>

            <div class="form-group">
                <label>성별</label>
                <input type="radio" id="male" name="gender" value="male"><label for="male">남자</label>
                <input type="radio" id="female" name="gender" value="female"><label for="female">여자</label>
            </div>

        <button type="submit" name="submit">회원 가입</button>
    </form>
</div>
</body>
</html>