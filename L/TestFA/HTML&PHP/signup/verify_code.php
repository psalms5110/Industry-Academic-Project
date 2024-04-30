<?php
include '../../path/to/db_config.php';  // db_config.php 파일의 경로를 정확히 지정하세요

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['code'])) {
    $submittedCode = $_POST['code'];

    // 데이터베이스에서 인증 코드 확인
    $sql = "SELECT email FROM users WHERE verification_code=? AND email_verified=0";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $submittedCode);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // 이메일 인증 상태 업데이트
        $updateSql = "UPDATE users SET email_verified=1 WHERE verification_code=?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("s", $submittedCode);
        $updateStmt->execute();
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
    $stmt->close();
}
$conn->close();
?>