<?php
$host = 'localhost';
$dbname = 'post';
$username = 'root';
$password = 'a0524';

$conn = new mysqli($host, $username, $password, $dbname);

// 문자셋을 utf8로 설정
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = $_POST['response'];
    $updateQuery = "UPDATE inquiries SET response = ?, status = '답변 완료' WHERE id = ?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("si", $response, $id);
    $stmt->execute();
    header("Location: admin_inquiry.php");
    exit();
}

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
    <title>문의 답변 작성</title>
    <link href="../../styles/admin_response.css" rel="stylesheet">
</head>
<body>
<div class="response-container">
    <h2 class="response-title">[ 문의 답변 작성 ]</h2>
    <p>접수번호: <?php echo str_pad($inquiry['id'], 6, '0', STR_PAD_LEFT); ?></p>
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
        <textarea id="content" name="content" rows="5" readonly><?php echo htmlspecialchars($inquiry['content']); ?></textarea>
    </div>
    <div class="form-group">
        <label for="image">이미지 첨부 다운로드</label>
        <?php if (!empty($inquiry['image'])): ?>
            <a href="<?php echo htmlspecialchars($inquiry['image']); ?>" download>다운로드</a>
        <?php else: ?>
            <p>첨부된 이미지가 없습니다.</p>
        <?php endif; ?>
    </div>
    <form method="POST">
        <div class="form-group">
            <label for="response">답변 내용</label>
            <textarea id="response" name="response" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="제 출">
        </div>
    </form>
</div>
</body>
</html>
<?php $conn->close(); ?>
