<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grid Layout Example</title>
  <link rel="stylesheet" href="../../styles/Category.css">
</head>
<body>
  <header>
      <div class="header-container">
          <div class="logo-container">
              <img class="cate" src="../../image/cate.png" alt="cate">
              <img class="home-image" src="../../image/home.png" alt="home">
          </div>
          <div class="search-container">
              <input type="text" placeholder="검색하세요.">
              <button type="submit">검색</button>
              <img class="profile-image" src="../../image/profile.png" alt="Profile Image">
          </div>
      </div>
  </header>
  <nav>
    <ul>
      <li style="border-left: 1px solid #96B6CA;"><a href="#application-home">애플리케이션 보안</a></li>
      <li><a href="#network-home">네트워크 보안</a></li>
      <li style="border-right: 1px solid #96B6CA;"><a href="#forensic-home">포렌식</a></li>
    </ul>
  </nav>
  
  <div class="container1">
    <div class="row1">
      <div class="col1">
        <div class="title1">
          <div class="title">[ 자유게시판 ]</div>
          <img class="plus" src="../../image/plus.png" alt="Image">
        </div>
        <div class="grid-container">
          <div class="grid">
          <img src="../../image/post.png" alt="Image">
          <div class="grid-item">
            <div class="item1-2-info">
              <div class="item1-2-title">제목</div>
              <div class="item1-2-summary">요약 내용</div>
            </div></div>
            <div class="item1-2-views">조회수 n회</div></div><hr class="short-hr">
          <div class="grid">
            <img src="../../image/post.png" alt="Image">
            <div class="grid-item">
              <div class="item1-2-info">
                <div class="item1-2-title">제목</div>
                <div class="item1-2-summary">요약 내용</div>
              </div></div>
              <div class="item1-2-views">조회수 n회</div></div><hr class="short-hr">
          <div class="grid">
            <img src="../../image/post.png" alt="Image">
            <div class="grid-item">
              <div class="item1-2-info">
                <div class="item1-2-title">제목</div>
                <div class="item1-2-summary">요약 내용</div>
              </div></div>
              <div class="item1-2-views">조회수 n회</div></div>
        </div>
      </div>
    </div>
    <div class="row2">
      <div class="col">
        <div class="title1">
          <div class="title">[ 신규게시글 ]</div>
          <img class="plus" src="../../image/plus.png" alt="Image">
        </div>
        <div class="grid-container">
          <div class="grid">
            <img src="../../image/post.png" alt="Image">
            <div class="grid-item">
              <div class="item1-2-info">
                <div class="item1-2-title">제목</div>
                <div class="item1-2-summary">요약 내용</div>
              </div></div>
            <div class="item1-2-info">
              <div class="item1-2-views">조회수 n회</div>
            <div class="item1-2-post">자유게시판</div>
            </div>
          </div><hr class="short-hr">
            <div class="grid">
              <img src="../../image/post.png" alt="Image">
              <div class="grid-item">
                <div class="item1-2-info">
                  <div class="item1-2-title">제목</div>
                  <div class="item1-2-summary">요약 내용</div>
                </div></div>
              <div class="item1-2-info">
                <div class="item1-2-views">조회수 n회</div>
              <div class="item1-2-post">네트워크 보안</div>
              </div>
            </div><hr class="short-hr">
            <div class="grid">
              <img src="../../image/post.png" alt="Image">
              <div class="grid-item">
                <div class="item1-2-info">
                  <div class="item1-2-title">제목</div>
                  <div class="item1-2-summary">요약 내용</div>
                </div>
              </div>
              <div class="item1-2-info">
                <div class="item1-2-views">조회수 n회</div>
              <div class="item1-2-post">포렌식</div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container2">
    <div class="row3">
      <div class="title2">
      <div class="title-news">[ 보안 뉴스 ]</div>
      <img class="right-image" src="../../image/plus.png" alt="Image">
      </div>
    </div>
    <div class="row4">
      <div class="grid-container2">
        <div class="grid-item2" style="
          border-right: 1px solid #ccc;">
          <img src="../../image/news.png" alt="이미지">
          <p1>제목</p1><hr>
          <p2>요약 내용</p2><hr>
        </div>
        <div class="grid-item2" style="
          border-right: 1px solid #ccc;">
          <img src="../../image/news.png" alt="이미지">
          <p1>제목</p1><hr>
          <p2>요약 내용</p2><hr>
        </div>
        <div class="grid-item2" style="
          border-right: 1px solid #ccc;">
          <img src="../../image/news.png" alt="이미지">
          <p1>제목</p1><hr>
          <p2>요약 내용</p2><hr>
        </div>
        <div class="grid-item2">
          <img src="../../image/news.png" alt="이미지">
          <p1>제목</p1><hr>
          <p2>요약 내용</p2><hr>
        </div>
      </div>
    </div>
  </div>


  </body>
  </html>
