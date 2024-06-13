<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>ares</title>
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

  <main>
    <div style="text-align: center; color: #656565;">
      <h1>[ 자유게시판 ]</h1>
    </div>
    <div class="search-container1">
      <select id="sort-select">
        <option value="default">--선택--</option>
        <option value="title">제목</option>
        <option value="name">닉네임</option>
        <option value="num">순서</option>
      </select>

      <div class="search-box">
        <input type="text" placeholder="검색어를 입력하세요">
        <input type="submit" value="검색">
      </div>
    </div>
    <div class="write-button-container">
      <div class="total-posts">총 게시물 15건</div>
      <button class="write-button">작성하기</button>
    </div>
    <table class="board-table">
      <colgroup>
        <col width="40">
        <col width="300">
        <col width="120">
        <col width="120">
        <col width="80">
      </colgroup>
      <thead>
        <tr>
          <th scope="col">순번</th>
          <th scope="col">제목</th>
          <th scope="col">글쓴이</th>
          <th scope="col">날짜</th>
          <th scope="col">조회수</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="number">10</td>
          <td class="title">
            <a href="#">제목 10</a>
            <img class="attachment-icon" src="ic_pic.gif" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
            <img class="new-icon" src="new.png" alt="새글">
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr class="reply">
          <td class="number" style="padding-left:30px;">
          <td class="title" style="padding-left:30px;">
            <a href="#">답글</a>
          </td>
          <td class="author">관리자</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr>
          <td class="number">9</td>
          <td class="title">
            <a href="#">제목 9</a>
            <img class="attachment-icon" src="new.pngf" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
            <img class="new-icon" src="new.png" alt="새글">
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr>
          <td class="number">8</td>
          <td class="title">
            <a href="#">제목 8</a>
            <img class="attachment-icon" src="ic_pic.gif" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
            <img class="new-icon" src="new.png" alt="새글">
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr>
          <td class="number">7</td>
          <td class="title">
            <a href="#">제목 7</a>
            <img class="attachment-icon" src="ic_pic.gif" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr>
          <td class="number">6</td>
          <td class="title">
            <a href="#">제목 6</a>
            <img class="attachment-icon" src="ic_pic.gif" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr>
          <td class="number">5</td>
          <td class="title">
            <a href="#">제목 5</a>
            <img class="attachment-icon" src="ic_pic.gif" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr>
          <td class="number">4</td>
          <td class="title">
            <a href="#">제목 4</a>
            <img class="attachment-icon" src="ic_pic.gif" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr>
          <td class="number">3</td>
          <td class="title">
            <a href="#">제목 3</a>
            <img class="attachment-icon" src="ic_pic.gif" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr>
          <td class="number">2</td>
          <td class="title">
            <a href="#">제목 2</a>
            <img class="attachment-icon" src="ic_pic.gif" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
        <tr>
          <td class="number">1</td>
          <td class="title">
            <a href="#">제목 1</a>
            <img class="attachment-icon" src="ic_pic.gif" alt="첨부이미지">
            <a class="comment-link" href="#">[5]</a>
          </td>
          <td class="author">글쓴이이름</td>
          <td class="date">2024/01/01</td>
          <td class="views">1234</td>
        </tr>
      </tbody>
    </table>
  </main>

  <div style="margin-top: 100px;"></div>
  <div class="pagination" >
    <a href="#">&laquo;</a>
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#" style="margin-bottom: 100px;">&raquo;</a>
  </div>
</body>

</html>