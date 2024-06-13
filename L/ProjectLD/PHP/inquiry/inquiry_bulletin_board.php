<?php
$host = 'localhost';
$dbname = 'post';
$username = 'root';
$password = 'ares123';
$perPage = 10;

$conn = new mysqli($host, $username, $password, $dbname);

// 문자셋을 utf8로 설정
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 총 문의글 수 계산
$totalQuery = "SELECT COUNT(id) AS total FROM inquiries";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalPosts = $totalRow['total'];
$totalPages = ceil($totalPosts / $perPage);

// 현재 페이지 번호 확인 (URL에서 page 파라미터 값)
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($currentPage - 1) * $perPage;

// 문의글 가져오기 (현재 페이지에 맞게)
$sql = "SELECT id, title, inquiry_date, status FROM inquiries ORDER BY inquiry_date DESC LIMIT $perPage OFFSET $offset";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete_posts']) && isset($_POST['post_ids'])) {
        $post_ids = $_POST['post_ids'];
        foreach ($post_ids as $id) {
            $deleteQuery = "DELETE FROM inquiries WHERE id = ?";
            $stmt = $conn->prepare($deleteQuery);
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_POST['update_status']) && isset($_POST['post_ids'])) {
        $post_ids = $_POST['post_ids'];
        foreach ($post_ids as $id) {
            $updateQuery = "UPDATE inquiries SET status = '답변 완료' WHERE id = ?";
            $stmt = $conn->prepare($updateQuery);
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_POST['create_post'])) {
        header("Location: Contact_us.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>문의 게시판</title>
    <link href="css/inquiry_bulletin_board.css" rel="stylesheet">
    </head>
<body>
<h2 class="board-title">[문의 게시판]</h2>
<form method="POST" action="">
    <div class="delete-button-container">
        <input type="submit" name="create_post" value="글쓰기">
    </div>
    <table class="board-table">
        <thead>
            <tr>
                <th>접수 번호</th>
                <th>제목</th>
                <th>접수일</th>
                <th>문의 상태</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $filledRows = 0;
            if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr onclick="location.href='Response.php?id=<?php echo $row['id']; ?>'">
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                        <td><?php echo htmlspecialchars($row['inquiry_date']); ?></td>
                        <td><?php echo htmlspecialchars($row['status']); ?></td>
                    </tr>
                    <?php $filledRows++; ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php
            // 문의글이 10개 미만인 경우 빈 행을 추가
            if ($filledRows < 10):
                for ($i = $filledRows; $i < 10; $i++):
            ?>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php endfor; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="pagination">
    <?php
    if ($totalPages > 1) {
        for ($i = 1; $i <= $totalPages; $i++) {
            echo '<a href="?page=' . $i . '">' . $i . '</a> ';
        }
    }
    ?>
</div>
</form>
</body>
</html>
<?php $conn->close(); ?>