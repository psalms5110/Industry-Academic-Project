<!DOCTYPE html>
<html lang="ko">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Ares</title>
    <link href="../../styles/Freeboard.css" rel="stylesheet" type="text/css" />
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
  <!-- 리스트 게시판 시작-->

  <table class="sub_news" border="1" cellspacing="0" summary="게시판의 글제목 리스트">
    <caption>게시판 리스트</caption>
    <colgroup>
      <col>
      <col width="110">
      <col width="100">
      <col width="80">
    </colgroup>
    <thead>
      <tr>
        <th scope="col">제목</th>
        <th scope="col">글쓴이</th>
        <th scope="col">날짜</th>
        <th scope="col">조회수</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="title">
          <a href="#">제목 1</a>
          <img width="13" height="12" class="pic" alt="첨부이미지" src="첨부파일 ic_pic.gif"> <a class="comment" href="#">[5]</a>
          <img width="10" height="9" class="new" alt="새글" src="첨부파일/ic_new.gif">
        </td>
        <td class="name">글쓴이이름</td>
        <td class="date">2024/01/01</td>
        <td class="hit">1234</td>
      </tr>
      <tr class="reply">
        <td class="title" style="padding-left:30px;">
          <a href="#">답글</a>
        </td>
        <td class="name">관리자</td>
        <td class="date">2024/01/01</td>
        <td class="hit">1234</td>
      </tr>
      <tr>
        <td class="title">
          <a href="#">제목 2</a>
          <img width="13" height="12" class="pic" alt="첨부이미지" src="첨부파일 ic_pic.gif"> <a class="comment" href="#">[5]</a>
          <img width="10" height="9" class="new" alt="새글" src="첨부파일/ic_new.gif">
        </td>
        <td class="name">글쓴이이름</td>
        <td class="date">2024/01/01</td>
        <td class="hit">1234</td>
      </tr>

      <!-- tr이 제목 1줄임 보일 list 갯수만큼 li반복 -->
    </tbody>
  </table>

  <!-- 리스트 게시판 끝-->
</body>

</html>
