<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>post</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header>
    <div class="header-container">
      <div class="logo-container">
        <img class="cate" src="cate.jpg" alt="cate">
        <img class="home-image" src="home.jpg" alt="home">
      </div>
      <div class="search-container">
        <input type="text" placeholder="검색하세요.">
        <button type="submit">검색</button>
        <img class="profile-image" src="your-image.jpg" alt="Profile Image">
      </div>
    </div>
  </header>
  <div class="note" style="margin-top:50px;">
    <form>
      <label for="title">제목</label>
      <input type="text" id="title" name="title" required>

      <label for="title">부제목</label>
      <input type="text" id="subtitle" name="subtitle" required>

      <label for="content">내용</label>
      <textarea id="content" name="content" rows="10" required></textarea>

      <label for="attachment">첨부 파일:</label>
      <input type="file" id="attachment" name="attachment">

      <label for="content">출처</label>
      <textarea id="from" name="content" rows="2" required></textarea>


  </div>
  <div class="save">
    <button type="submit">저장</button>
  </div>

  </form>
</body>

</html>