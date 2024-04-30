<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>ARES</title>
  <link href="../../styles/SecNewsWriting.css" rel="stylesheet" />
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
  <div id="board_write">
    <div id="write_area">
      <form enctype="multipart/form-data" action="write_ok.php?board_id=<?echo $board_id;?>" method="post">
        <div id="in_title">
          <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
        </div>

        <div class="wi_line"></div>
        <div id="in_content">
          <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
        </div>

        <input type="file" name="SelectFile" />


        <div class="bt_se">
          <button type="submit">저장</button>
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>
