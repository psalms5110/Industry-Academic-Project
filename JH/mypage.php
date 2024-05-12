<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile Page</title>
    <link href="css/mypage.css" rel="stylesheet">
</head>
<body>
    <div class="profile-container">
        <h2>[ 마이 페이지 ]</h2>    
        <div class="avatar"></div>
        <div class="hi">
            <a href="signup.php"><strong>회원가입 하기></strong></a>
            <a href="login.php"><strong>로그인 하기></strong></a>
</div>
        <ul class="menu">
        <li class="menu-item">
            <span class="menu-label">관리</span>
            <a href="post_management.php" class="menu-link">작성한 게시글 관리</a>
            <a href="comment_management.php" class="menu-link">작성한 댓글 관리</a>
            <a href="bookmark_management.php" class="menu-link">북마크 관리</a>
        </li>
        <li class="menu-item">
            <span class="menu-label">문의</span>
            <a href="inquiry_bulletin_board.php" class="menu-link">문의 게시판</a>
        </li>
    </ul>
    </div>
</body>
</html>
