<?php
$host = 'localhost';
$dbname = 'member';
$username = 'signupuser';
$password = 'b001';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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