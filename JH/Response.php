<?php
$host = 'localhost';
$dbname = 'post';
$username = 'root';
$password = 'ares123';

$conn = new mysqli($host, $username, $password, $dbname);

// 문자셋을 utf8로 설정
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$query = "SELECT * FROM inquiries WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$inquiry = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>문의 답변</title>
    <link href="css/Response.css" rel="stylesheet">
</head>
<body>
<div class="header-container">
    <p class="inquiry-id">접수번호: <?php echo str_pad($inquiry['id'], 6, '0', STR_PAD_LEFT); ?></p>
    <h2 class="response-title">[ 문의 답변 ]</h2>
</div>
<div class="response-container">
    <div class="form-group">
        <label for="category">카테고리</label>
        <input type="text" id="category" value="<?php echo htmlspecialchars($inquiry['category']); ?>" readonly>
    </div>
    <div class="form-group">
        <label for="title">제목</label>
        <input type="text" id="title" value="<?php echo htmlspecialchars($inquiry['title']); ?>" readonly>
    </div>
    <div class="form-group">
        <label for="content">문의 내용</label>
        <textarea id="content" rows="5" readonly><?php echo htmlspecialchars($inquiry['content']); ?></textarea>
    </div>
    <div class="form-group">
        <label for="response">답변 내용</label>
        <textarea id="response" rows="5" readonly><?php echo htmlspecialchars($inquiry['response'] ?? ''); ?></textarea>
    </div>
</div>
</body>
</html>
<?php $conn->close(); ?>
