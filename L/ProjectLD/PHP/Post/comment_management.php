<?php
// 데이터베이스 연결
$host = 'localhost';
$dbname = 'post';
$username = 'root';
$password = '0524';
$perPage = 5;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8mb4");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// 댓글 삭제
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_comments']) && isset($_POST['comment_ids'])) {
    $commentIds = implode(',', array_map('intval', $_POST['comment_ids']));
    $deleteQuery = "DELETE FROM comments WHERE id IN ($commentIds)";
    $stmt = $pdo->prepare($deleteQuery);
    if ($stmt->execute()) {
        header("Location: comment_management.php");
        exit;
    } else {
        echo "Error deleting comments: " . $stmt->errorInfo()[2];
    }
}

// 총 댓글 수 계산
$totalQuery = "SELECT COUNT(id) AS total FROM comments";
$totalResult = $pdo->query($totalQuery);
$totalRow = $totalResult->fetch(PDO::FETCH_ASSOC);
$totalComments = $totalRow['total'];
$totalPages = ceil($totalComments / $perPage);

// 현재 페이지 번호 확인 (URL에서 page 파라미터 값)
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($currentPage - 1) * $perPage;

// 댓글 가져오기 (현재 페이지에 맞게)
$sql = "SELECT comments.id, posts.category, posts.title, comments.comment, comments.created_at 
        FROM comments 
        JOIN posts ON comments.post_id = posts.id 
        ORDER BY comments.created_at DESC 
        LIMIT $perPage OFFSET $offset";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>작성한 댓글 관리</title>
    <link href="../../styles/comment_management.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="board-title">[작성한 댓글 관리]</h2>
    <form method="POST">
        <table class="board-table">
            <thead>
                <tr>
                    <th colspan="4"><input type="checkbox" id="selectAll"> <input type="submit" name="delete_comments" value="삭제" style="float: right;"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $filledRows = 0;
                if (count($comments) > 0): ?>
                    <?php foreach ($comments as $comment): ?>
                        <tr>
                            <td><input type="checkbox" name="comment_ids[]" value="<?php echo $comment['id']; ?>"></td>
                            <td><?php echo htmlspecialchars($comment['category']); ?></td>
                            <td>
                                <strong><?php echo htmlspecialchars($comment['title']); ?></strong><br>
                                <?php echo htmlspecialchars($comment['comment']); ?>
                            </td>
                            <td><?php echo htmlspecialchars($comment['created_at']); ?></td>
                        </tr>
                        <?php $filledRows++; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php
                // 댓글이 5개 미만인 경우 빈 행을 추가
                if ($filledRows < 5):
                    for ($i = $filledRows; $i < 5; $i++):
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
</div>

<script>
    // 전체 선택/해제 기능을 하는 JavaScript 코드
    document.getElementById('selectAll').addEventListener('click', function(e) {
        var checkboxes = document.querySelectorAll('input[name="comment_ids[]"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    });
</script>
</body>
</html>
<?php $pdo = null; ?>
