<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ARES</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}
.container {
    width: 80%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.header, .footer {
    text-align: center;
    padding: 10px 0;
}
.header img {
    max-width: 100px;
}
.content {
    margin-top: 20px;
}
.yellow-box {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff8dc;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
}
.form-group {
    margin-top: 20px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
.form-group input[type="text"], .form-group input[type="file"], .form-group button, .form-group a {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
    display: inline-block;
    color: #000;
    text-decoration: none;
}
.form-group input[type="text"] {
    width: calc(100% - 110px);
    display: inline-block;
    vertical-align: middle;
}
.form-group button {
    width: 100px;
    display: inline-block;
    vertical-align: middle;
}
.comments {
    margin-top: 20px;
}
.comment {
    border-top: 1px solid #eee;
    padding: 10px 0;
}
.comment:first-of-type {
    border-top: none;
}
.comment span {
    display: block;
    font-size: 12px;
    color: #888;
}
.pagination {
    text-align: center;
    margin-top: 20px;
}
.pagination a {
    margin: 0 5px;
    text-decoration: none;
    color: #888;
}
.pagination a.active {
    font-weight: bold;
    color: #000;
}
</style>
<script>
function checkFlag() {
    const correctFlag = "DH{correct_flag}";
    const userFlag = document.getElementById("flagInput").value;
    const result = document.getElementById("flagResult");
    if (userFlag === correctFlag) {
        result.textContent = "정답입니다.";
        result.style.color = "green";
    } else {
        result.textContent = "오답입니다.";
        result.style.color = "red";
    }
}
</script>
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <img src="css/image/top_logo.png" alt="Logo">
            </div>
            <nav class="navbar-links">
                <a href="#">이론</a>
                <a href="#">워게임</a>
                <a href="#">커뮤니티</a>
                <a href="#">퀴즈</a>
                <a href="#"><img src="----" alt="Search"></a>
                <a href="login.php">로그인</a>
            </nav>
        </div>
    </div>
<div class="container">
    <div class="header">
        <img src="logo.png" alt="ARES Logo">
    </div>

    <div class="content">
        <div class="yellow-box">
            <div>
                <h2>분야</h2>
                <p>문제 이름</p>
            </div>
            <div>
                <p>출제자</p>
            </div>
        </div>

        <div class="form-group">
            <label>문제 설명</label>
            <p>쿠키를 인증 상태를 관리하는 간단한 로그인 서비스입니다.<br>
            admin 계정으로 로그인에 성공하면 플래그를 획득할 수 있습니다.<br>
            플래그 형식은 DH{...} 입니다.</p>
        </div>

        <div class="form-group">
            <label>문제 파일 다운로드</label>
            <a href="path_to_your_file.zip" download>문제 다운로드</a>
        </div>

        <div class="form-group">
            <label>Flag 입력</label>
            <div style="display: flex;">
                <input type="text" id="flagInput" placeholder="플래그를 입력하세요">
                <button onclick="checkFlag()">제출</button>
            </div>
            <p id="flagResult"></p>
        </div>

        <div class="comments">
            <div class="form-group">
                <label for="comment">댓글</label>
                <div style="display: flex;">
                <input type="text" id="comment" placeholder="댓글 입력">
                <button>작성</button>
            </div>

            <div class="comment">
                <p>재미있어요.</p>
                <span>닉네임 20xx.xx.xx</span>
            </div>
            <div class="comment">
                <p>나 이거 못푸네...ㅠㅠ</p>
                <span>닉네임 20xx.xx.xx</span>
            </div>
            <div class="comment">
                <p>힘들었네요.</p>
                <span>닉네임 20xx.xx.xx</span>
            </div>
            <div class="comment">
                <p>재미있어요.</p>
                <span>닉네임 20xx.xx.xx</span>
            </div>
        </div>

        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</div>
</body>
</html>
