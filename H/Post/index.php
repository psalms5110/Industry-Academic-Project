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
    <!-- 내용 -->
    <h5 style="color:#656565;"><a href="#">큰 카테고리 </a>> <a href="#">세부 카테고리 </a></h5>
    <h1 style="color: #656565;">자세한 내용/제목</h1>
    <div class="info">
      <span style="color:#656565;">조회수 7개</span></br>
      <span style="color:#656565;">20xx.xx.xx</span>
    </div>
    <hr>
    <!-- 목차 목록 -->
    <!-- 네비게이션 바 -->
    <nav>
        <p>[목차]</p>
        <ol>
            <li><a href="#01">개요</a><br /></li>
            <li><a href="#02">내용</a><br /></li>
            <li><a href="#03">세부1</a><br /></li>
            <li><a href="#04">세부2</a><br /></li>
        </ol>
    </nav>
    <section>
        <article>
            <div class="main1">
                <img class="img1" src="main.png" alt="main1">
                <p>hello world! hello world! hello world! hello world! hello world! hello world! hello world!
                    hello world! hello world! hello world! hello world! hello world! hello world! hello world!
                </p>
            </div>
            <div class="main2">
                <h3 style="color:#656565;">
                    <내용>
                </h3>
                <p> whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing
                    whatrudoing
                    whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing
                </p>
                <img class="img1" src="main.png" alt="main2">
                <ol>
                    <h4 style="color: #656565;">세부내용 1</h4>
                    <p> whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing
                        whatrudoing whatrudoing whatrudoing
                    </p>
                    <h4 style="color: #656565;">세부내용 2</h4>
                    <p> whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing
                        whatrudoing whatrudoing whatrudoing
                    </p>
                </ol>
            </div>
        </article>
        <div class="down-buttons">
            <button><img class="thumb" src="thumbup.png" alt="thumbsup"> 추천</button>
            <button><img class="save" src="save.png" alt="save">저장</button>
        </div>
        </article>
    </section>
    <div class="reply">
        <div class="comment-input">
            <div class="comment-input-field">
                <textarea placeholder=""></textarea>
                <button class="comment-submit-btn">작성</button>
            </div>
        </div>
        <div class="comment-item">
            <div class="re-profile-image-container">
                <img class="re-profile-image" src="repro.png" alt="Profile">
            </div>
            <div class="comment-content">
                <div class="username">닉네임</div>
                <div class="comment-actions">
                    <a href="#">수정</a> | <a href="#">삭제</a>
                </div>
                <div class="text">잘 보고 갑니다.</div>
                <div class="timestamp-container">
                    <div class="timestamp">2023-05-01 12:34</div>
                </div>
            </div>
        </div>

        <hr style="margin-top:20px;">
        <div class="comment-item">
            <div class="re-profile-image-container">
                <img class="re-profile-image" src="repro.png" alt="Profile">
            </div>
            <div class="comment-content">
                <div class="username">닉네임</div>
                <div class="comment-actions">
                    <a href="#">수정</a> | <a href="#">삭제</a>
                </div>
                <div class="text">잘 보고 갑니다.</div>
                <div class="timestamp-container">
                    <div class="timestamp">2023-05-02 12:34</div>
                </div>
            </div>
        </div>
        <hr style="margin-top:20px;">
        <div class="comment-item">
            <div class="re-profile-image-container">
                <img class="re-profile-image" src="repro.png" alt="Profile">
            </div>
            <div class="comment-content">
                <div class="username">닉네임</div>
                <div class="comment-actions">
                    <a href="#">수정</a> | <a href="#">삭제</a>
                </div>
                <div class="text">잘 보고 갑니다.</div>
                <div class="timestamp-container">
                    <div class="timestamp">2023-05-03 12:34</div>
                </div>
            </div>
        </div>
        <hr>
        <div class="comment-item">
            <div class="re-profile-image-container">
                <img class="re-profile-image" src="repro.png" alt="Profile">
            </div>
            <div class="comment-content">
                <div class="username">닉네임</div>
                <div class="comment-actions">
                    <a href="#">수정</a> | <a href="#">삭제</a>
                </div>
                <div class="text">잘 보고 갑니다.</div>
                <div class="timestamp-container">
                    <div class="timestamp">2023-05-02 12:34</div>
                </div>
                <p style="text-align: left;">댓글 (1개)</p>
                <hr>
                <div class="reply-container">
                    <div class="comment-item">
                        <div class="re-profile-image-container">
                            <img class="re-profile-image" src="repro.png" alt="Profile">
                        </div>
                        <div class="comment-content">
                            <div class="username">답글 작성자</div>
                            <div class="comment-actions">
                                <a href="#">수정</a> | <a href="#">삭제</a>
                            </div>
                            <div class="text">감사합니다.</div>
                            <div class="timestamp-container">
                                <div class="timestamp">2023-05-03 10:15</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>