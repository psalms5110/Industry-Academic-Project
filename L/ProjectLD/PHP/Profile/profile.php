<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>프로필 관리</title>
<link rel="stylesheet" href="../styles/profile.css">
</head>
<body>
    <div class="title-container">
        <h1 class="title"><strong>[프로필 관리]</strong></h1>
    </div>
    <div class="container">
    <div class="avatar"></div>
        <div class="profile-container">
            <form class="profile-form">
                <div class="row">
                    <div class="input-group">
                        <label for="name">닉네임</label>
                        <input type="text" id="name" name="name" placeholder="이름을 입력하세요">
                    </div>
                    <div class="input-group">
                        <label for="email">이메일</label>
                        <input type="email" id="email" name="email" placeholder="이메일 주소를 입력하세요">
                    </div>
                </div>
                <div class="input-group">
                    <label for="bio">자기소개</label>
                    <textarea id="bio" name="bio" placeholder="자기소개를 작성하세요"></textarea>
                </div>

                <div class="button-group">
                    <button type="submit" class="save-button">저장</button>
                </div>
                <div class="footer-buttons">
                    <a href="resetpw.php" class="reset-button">비밀번호 재설정하기</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>