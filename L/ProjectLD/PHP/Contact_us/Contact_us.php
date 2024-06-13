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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = 'uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    $query = "INSERT INTO inquiries (category, title, content, image, status) VALUES (?, ?, ?, ?, '접수됨')";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $category, $title, $content, $image);
    $stmt->execute();

    header("Location: inquiry_bulletin_board.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>문의 작성</title>
    <link href="css/Contact_us.css" rel="stylesheet">
</head>
<body>
<div class="contact-container">
    <h2 class="contact-title">[ 문의 작성 ]</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="category">카테고리</label>
            <input type="text" id="category" name="category" required>
        </div>
        <div class="form-group">
            <label for="title">제목</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">문의 내용</label>
            <textarea id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">이미지 첨부</label>
            <div class="form-group-file">
                <span class="file-name">이미지는 PNG, JPG만 첨부 가능합니다.</span>
                <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg">
                <label for="image">첨 부</label>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="제 출">
        </div>
    </form>
</div>

<script>
    document.getElementById('image').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : '이미지는 PNG, JPG만 첨부 가능합니다.';
        document.querySelector('.file-name').textContent = fileName;
    });
</script>

</body>
</html>
<?php $conn->close(); ?>
