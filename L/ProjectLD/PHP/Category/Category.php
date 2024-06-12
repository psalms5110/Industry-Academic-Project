<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>ARES</title>
  <link href="../styles/Category.css" rel="stylesheet" type="text/css" />
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
  <!-- 네비게이션 바 -->
  <nav>
    <ul>
      <li><a href="#application-home">애플리케이션 보안</a></li>
      <li><a href="#network-home">네트워크 보안</a></li>
      <li><a href="#forensic-home">포렌식</a></li>
      <li style="float:right"><a href="#profile">프로필</a></li>
      <li style="float:right"><a class="active" href="#about">About</a></li>
    </ul>
  </nav>
  <article>
    <!-- 자유게시판 목록 -->
    <div class="left-container">
      <h2>자유게시판</h2>
      <div class="container-free">
        <div class="m1">
          <img class="m1-image" src="m1.png" alt="m1-image">
          <h4>제목1</h4>
          <p>요약내용</p>
        </div>
        <div class="m2">
          <img class="m2-image" src="m2.png" alt="m2-image">
          <h4>제목2</h4>
          <p>요약내용</p>
        </div>
        <div class="m3">
          <img class="m3-image" src="m3.png" alt="m3-image">
          <h4>제목3</h4>
          <p>요약내용</p>
        </div>
      </div>
    </div>
    <!-- 신규게시글 목록 -->
    <div class="right-container">
      <h2>신규게시글</h2>
      <div class="container-post">
        <div id="box1">
          <img class="m1-image" src="m1.png" alt="m1-image">
          <h4>제목1</h4>
          <p>요약내용</p>
        </div>
        <div id="box2">
          <img class="m2-image" src="m2.png" alt="m2-image">
          <h4>제목2</h4>
          <p>요약내용</p>
        </div>
        <div id="box3">
          <img class="m3-image" src="m3.png" alt="m3-image">
          <h4>제목3</h4>
          <p>요약내용</p>
        </div>
      </div>
    </div>

    <!-- 보안뉴스 목록 -->
    <div class="sec">
      <h2>보안뉴스</h2>
      <div class="container-news">
        <div id="box1">
          <img class="m1-image" src="m1.png" alt="m1-image">
          <h4>제목1</h4>
          <p>요약내용</p>
        </div>
        <div id="box2">
          <img class="m2-image" src="m2.png" alt="m2-image">
          <h4>제목2</h4>
          <p>요약내용</p>
        </div>
        <div id="box3">
          <img class="m3-image" src="m3.png" alt="m3-image">
          <h4>제목3</h4>
          <p>요약내용</p>
        </div>
        <div id="box4">
          <img class="m4-image" src="m4.png" alt="m4-image">
          <h4>제목4</h4>
          <p>요약내용</p>
        </div>
      </div>
    </div>
  </article>
  <footer></footer>
  <script src="script.js"></script>
</body>

</html>
