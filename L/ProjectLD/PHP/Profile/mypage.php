<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile Page</title>
    <link href="../../styles/mypage.css" rel="stylesheet">
</head>
<body>
    <div class="profile-container">
        <h2>[ 마이 페이지 ]</h2>    
        <div class="avatar"></div>
        <div class="hi">
            <a href="../signup/signup.php"><strong>회원가입 하기></strong></a>
            <a href="../login/login.php"><strong>로그인 하기></strong></a>
</div>
        <ul class="menu">
        <li class="menu-item">
            <span class="menu-label">관리</span>
            <a href="../Post/post_management.php" class="menu-link">작성한 게시글 관리</a>
            <a href="../Post/comment_management.php" class="menu-link">작성한 댓글 관리</a>
            <a href="../Post/bookmark_management.php" class="menu-link">북마크 관리</a>
        </li>
        <li class="menu-item">
            <span class="menu-label">문의</span>
            <a href="../inquiry/inquiry_bulletin_board.php" class="menu-link">문의 게시판</a>
        </li>
    </ul>
    </div>
</body>
</html>
