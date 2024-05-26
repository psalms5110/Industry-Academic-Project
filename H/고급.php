<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 글 목록</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .index-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .index-box {
            padding: 10px 20px;
            margin: 5px;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
        

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search-container {
            padding: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #f8f9fa;
        }

        .search-box {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-box input[type="text"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
        }

        .search-box input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-left: none;
            border-radius: 0 5px 5px 0;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .search-box input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .category-boxes {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .category-box {
            padding: 10px 20px;
            margin: 5px;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .category-box:hover {
            background-color: #BCE1E9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination a {
            color: #333;
            padding: 10px 15px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 5px;
            border-radius: 5px;
        }

        .pagination a:hover {
            background-color: #ddd;
        }

        .register-button {
            text-align: right;
            margin-top: 20px;
        }

        .register-button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-button button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <img src="css/image/top_logo.png" alt="Logo">
            </div>
            <nav class="navbar-links">
                <a href="#">이론</a>
                <a href="#">워게임</a>
                <a href="#">커뮤니티</a>
                <a href="#">퀴즈</a>
                <a href="#"><img src="----" alt="Search"></a>
                <a href="login.php">로그인</a>
            </nav>
        </div>
    </div>
    <div class="index-container">
        <div class="index-box" onclick="document.location.href='입문.php'">입문</div>
        <div class="index-box" onclick="document.location.href='초급.php'">초급</div>
        <div class="index-box" onclick="document.location.href='중급.php'">중급</div>
        <div class="index-box" onclick="document.location.href='고급.php'" style="background-color:#BCE1E9">고급</div>
    </div>
    <div class="container">
        <div class="search-container">
            <div class="search-box">
                <input type="text" placeholder="검색어를 입력하세요">
                <input type="submit" value="검색">
            </div>
            <div class="category-boxes">
                <div class="category-box">전체</div>
                <div class="category-box">웹해킹</div>
                <div class="category-box">리버싱</div>
                <div class="category-box">암호학</div>
                <div class="category-box">포렌식</div>
                <div class="category-box">클라우드</div>
                <div class="category-box">시스템 해킹</div>
                <div class="category-box">기타</div>
            </div>
        </div>
        <div>
            <select id="sort-select">
                <option value="default">정렬</option>
                <option value="latest">최신순</option>
                <option value="most_solved">풀이 많은 순</option>
                <option value="least_solved">풀이 적은 순</option>
                <option value="popular">인기순</option>
            </select>
        </div>
        <table>
            <thead>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>분야</th>
                    <th>작성자</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">게시물 제목 1</a></td>
                    <td>포렌식</td>
                    <td>작성자1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="#">게시물 제목 2</a></td>
                    <td>리버싱</td>
                    <td>작성자2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="#">게시물 제목 3</a></td>
                    <td>클라우드</td>
                    <td>작성자3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a href="#">게시물 제목 4</a></td>
                    <td>포렌식</td>
                    <td>작성자4</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><a href="#">게시물 제목 5</a></td>
                    <td>클라우드</td>
                    <td>작성자5</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><a href="#">게시물 제목 6</a></td>
                    <td>클라우드</td>
                    <td>작성자6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><a href="#">게시물 제목 7</a></td>
                    <td>포렌식</td>
                    <td>작성자7</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><a href="#">게시물 제목 8</a></td>
                    <td>시스템 해킹</td>
                    <td>작성자8</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><a href="#">게시물 제목 9</a></td>
                    <td>암호학</td>
                    <td>작성자9</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><a href="#">게시물 제목 10</a></td>
                    <td>웹해킹</td>
                    <td>작성자10</td>
                </tr>
            </tbody>
        </table>
        <div class="pagination">
            <a href="#">&laquo; 이전</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">다음 &raquo;</a>
        </div>
    </div>
    <div class="register-button">
        <button>워게임 문제 등록하기</button>
    </div>
    <script>
        function filterLevel(level) {
            // 여기에 해당 레벨에 따른 처리 작성
            alert(level);
        }
    </script>
</body>

</html>