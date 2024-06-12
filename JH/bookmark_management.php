<?php
$host = 'localhost';
$dbname = 'post';
$username = 'root';
$password = 'ares123';
$perPage = 10;

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 총 게시글 수 계산
$totalQuery = "SELECT COUNT(id) AS total FROM posts";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalPosts = $totalRow['total'];
$totalPages = ceil($totalPosts / $perPage);

// 현재 페이지 번호 확인 (URL에서 page 파라미터 값)
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($currentPage - 1) * $perPage;

// 게시글 가져오기 (현재 페이지에 맞게)
$sql = "SELECT id, category, title, post_date, comment_count FROM posts ORDER BY post_date DESC LIMIT $perPage OFFSET $offset";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>북마크 관리</title>
    <link href="css/post_management.css" rel="stylesheet">
</head>
<body>
<h2 class="board-title">[북마크 관리]</h2>
<form method="POST">
    <div class="delete-button-container">
        <input type="submit" name="delete_posts" value="삭제">
    </div>
    <table class="board-table">
        <thead>
            <tr>
                <th><input type="checkbox" id="selectAll"></th>
                <th>카테고리</th>
                <th>제목</th>
                <th>작성일</th>
                <th>댓글수</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $filledRows = 0;
            if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><input type="checkbox" name="post_ids[]" value="<?php echo $row['id']; ?>"></td>
                        <td><?php echo htmlspecialchars($row['category']); ?></td>
                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                        <td><?php echo htmlspecialchars($row['post_date']); ?></td>
                        <td><?php echo htmlspecialchars($row['comment_count']); ?></td>
                    </tr>
                    <?php $filledRows++; ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php
            // 게시물이 10개 미만인 경우 빈 행을 추가
            if ($filledRows < 10):
                for ($i = $filledRows; $i < 10; $i++):
            ?>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
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


<script>
    // 전체 선택/해제 기능을 하는 JavaScript 코드
    document.getElementById('selectAll').addEventListener('click', function(e) {
        var checkboxes = document.querySelectorAll('input[name="post_ids[]"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    });
</script>
</body>
</html>
<?php $conn->close(); ?>
