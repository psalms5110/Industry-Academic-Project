<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>post</title>
  <link href="../../styles/Post(freeboard).css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header>
    <!-- 이미지 -->
    <img class="cate" src="cate.jpg" alt="cate">
    <img class="home-image" src="home.jpg" alt="home">

    <!-- 검색창 -->
    <div class="search-container">
      <input type="text" placeholder="검색하세요.">
      <button type="submit">검색</button>
      <img class="profile-image" src="your-image.jpg" alt="Profile Image">
    </div>
  </header>
  <!-- 내용 -->
  <h1>[ 자유게시판 ]</h1>
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
