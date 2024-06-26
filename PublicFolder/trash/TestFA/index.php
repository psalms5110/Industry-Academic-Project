<!DOCTYPE html> <!-- HTML 형식 선언 -->
<html lang="ko">
<head>
    <meta charset="UTF-8"> <!-- 문자 인코딩을 UTF-8로 설정 -->
    <title>ARES</title> <!-- 웹 페이지 타이틀 설정 -->
    <link href="styles/index.css" rel="stylesheet"> <!-- 외부 css 파일 연결 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> <!-- 아이콘 라이브러리 연결 ex. ? -->
</head> 
<body>
    <div class="container"> <!-- 웹페이지의 전체 컨텐츠를 감싸는 컨테이너 -->
        <div class="logo"> <!-- 로고 이미지를 담는 부분 -->
            <img src="css/image/logo.png" alt="TEST INDEX"> <!-- 로고 이미지 삽입 및 대체 텍스트 설정. 이미지가 로드되지 않았거나 이미지를 지원하지 않는 환경이라면, 대체로 텍스트가 표시됨. -->
        </div>

        <div class="search-container"> <!-- 검색창에 관한 컨테이너 -->
            <button type="submit" class="search-btn"> <!-- 검색 버튼 -->
                <i class="fa fa-search"></i> <!-- 검색 아이콘 추가 -->
            </button>
            <input type="search" name="search" placeholder="검색어, 태그, 콘텐츠를 검색하세요" class="search-input"> <!-- 검색 입력 필드 -->
        </div>

        <div class="button-container"> <!-- 로그인 및 회원가입 버튼을 담는 컨테이너 -->
            <button onclick="location.href='/HTMLandPHP/login/login.php'" class="button">로그인</button> <!-- 로그인 페이지 주소 및 이동 버튼 -->
            <button onclick="location.href='/HTMLandPHP/signup/signup.php'" class="button">회원가입</button> <!-- 회원가입 페이지 주소 및 이동 버튼 -->
        </div>
    </div>
</body>
</html>

