<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>post</title>
  <link href="../../styles/Post.css" rel="stylesheet"/>
</head>

<body>
  <header>
    <!-- 검색창 -->
  <div class="search-container">
    <input type="text" placeholder="검색...">
    <button type="submit">검색</button>
  </div>
  <!-- 프로필 이미지 -->
  <img class="profile-image" src="your-image.jpg" alt="Profile Image">
  </header>
  <!-- 내용 -->
  <h5><a href="#">큰 카테고리 </a>> <a href="#">세부 카테고리 </a></h5>
  <h1>자세한 내용/제목</h1>
  <!-- 목차 목록 -->
  <!-- 네비게이션 바 -->
  <nav>
    <p>[목차]</p>
    <ol>
    <li><a href="#01">개요</a><br/></li>
    <li><a href="#02">내용</a><br/></li>
    <li><a href="#03">세부1</a><br/></li>
    <li><a href="#04">세부2</a><br/></li>
    </ol>
  </nav>
  <section>
    <article>
        <div class="main1">
            <img class="img1" src="main1.jpg" alt="main1">
            <p>hello world! hello world! hello world! hello world! hello world! hello world! hello world! 
                hello world! hello world! hello world! hello world! hello world! hello world! hello world! 
            </p>
        </div>
        <div class="main2">
            <h3> < 내용 ></h3>
            <p> whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing
                whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing
            </p>
            <img class="img2" src="main2.jpg" alt="main2">
            <ol>
                <li>세부내용</li>
                <p> whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing
                    whatrudoing whatrudoing whatrudoing
                </p>
                <li>세부내용2</li>
                <p> whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing whatrudoing
                    whatrudoing whatrudoing whatrudoing
                </p>
            </ol>
        </div>
    </article>
    <div class="down-buttons">
        <button><img src="추천.jpg" alt="thumbsup"> 추천</button>
        <button><img src="저장.jpg" alt="save">저장</button>
    </div>
    <div class="container">
    <div id="comment">
        <div id="comment-count">댓글 <span id="count">0</span></div>
        <input id="comment-input" placeholder="댓글을 입력해주세요.">
        <button id="submit">작성</button>
    </div>
    </div>
  </section>
  <footer></footer>
  <script src="script.js"></script>
</body>

</html>
