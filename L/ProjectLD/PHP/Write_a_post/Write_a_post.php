<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Ares</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <img class="cate" src="cate.png" alt="cate">
                <img class="home-image" src="home.png" alt="home">
            </div>
            <div class="search-container">
                <input type="text" placeholder="검색하세요.">
                <button type="submit">검색</button>
                <img class="profile-image" src="profile.png" alt="Profile Image">
            </div>
        </div>
    </header>
    <div style="text-align: center; color: #656565;">
        <h1>[ 보안위키 작성 ]</h1>
    </div>
    <div class="note">
        <form>
            <div style="display: flex; justify-content: space-between;">
                <div>
                    <label for="cate">큰 카테고리</label>
                    <input type="text" id="title" name="cate" required>
                </div>
                <div>
                    <label for="subcate">작은 카테고리</label>
                    <input type="text" id="subtitle" name="subcate" required>
                </div>
            </div>

            <label for="title">제목</label>
            <input type="text" id="title" name="title" required>


            <label for="content">내용</label>
            <textarea id="content" name="content" rows="10" required></textarea>

            <label for="attachment">첨부 파일:</label>
            <input type="file" id="attachment" name="attachment">

            <label for="list">목차</label>
            <div class="table-of-contents">
                <div class="content-list">
                    <div class="content-item">
                        <img class="con+" src="Add.png" alt="con+">
                        <img class="con-" src="Minus.png" alt="con-">
                        <textarea id="content" name="content" rows="0.5" placeholder="1. 내용 입력" required></textarea>
                    </div>
                    <div class="content-item" style="margin-left: 40px;">
                        <img class="con+" src="Add.png" alt="con+">
                        <img class="con-" src="Minus.png" alt="con-">
                        <textarea id="content" name="content" rows="0.5" placeholder="1-1. 내용 입력" required></textarea>
                    </div>
                    <div class="content-item" style="margin-left: 40px;">
                        <img class="con+" src="Add.png" alt="con+">
                        <img class="con-" src="Minus.png" alt="con-">
                        <textarea id="content" name="content" rows="0.5" placeholder="1-2. 내용 입력" required></textarea>
                    </div>
                    <div class="content-item">
                        <img class="con+" src="Add.png" alt="con+">
                        <img class="con-" src="Minus.png" alt="con-">
                        <textarea id="content" name="content" rows="0.5" placeholder="2. 내용 입력" required></textarea>
                    </div>
                    <div class="content-item" style="margin-left: 40px;">
                        <img class="con+" src="Add.png" alt="con+">
                        <img class="con-" src="Minus.png" alt="con-">
                        <textarea id="content" name="content" rows="0.5" placeholder="2-1. 내용 입력" required></textarea>
                    </div>
                    <div class="content-item" style="margin-left: 40px;">
                        <img class="con+" src="Add.png" alt="con+">
                        <img class="con-" src="Minus.png" alt="con-">
                        <textarea id="content" name="content" rows="0.5" placeholder="2-2. 내용 입력" required></textarea>
                    </div>
                    <div class="content-item">
                        <img class="con+" src="Add.png" alt="con+">
                        <img class="con-" src="Minus.png" alt="con-">
                        <textarea id="content" name="content" rows="0.5" placeholder="3. 내용 입력" required></textarea>
                    </div>
                    <div class="content-item" style="margin-left: 40px;">
                        <img class="con+" src="Add.png" alt="con+">
                        <img class="con-" src="Minus.png" alt="con-">
                        <textarea id="content" name="content" rows="0.5" placeholder="3-1. 내용 입력" required></textarea>
                    </div>
                    <div class="content-item" style="margin-left: 40px;">
                        <img class="con+" src="Add.png" alt="con+">
                        <img class="con-" src="Minus.png" alt="con-">
                        <textarea id="content" name="content" rows="0.5" placeholder="3-2. 내용 입력" required></textarea>
                    </div>

                </div>
            </div>


            <div class="save">
                <button type="submit">저장</button>
            </div>

    </div>


    </form>

</body>

</html>