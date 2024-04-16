<?php
session_start();  // 세션 시작
include 'DB/logindb.php';  // DB 연결을 위한 db.php 파일을 포함.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="CSS/login.css" rel="stylesheet">  <!-- 로그인 페이지에 대한 스타일시트를 연결합니다. -->
</head>
<body> 
<div class="login-container">  <!-- 로그인 컨테이너 -->
    <div class="logo">
            <img src="../css/image/loginlogo.png" alt="ARES 로고">  <!-- ARES 로고 이미지 -->
            <div id="login_wrap" class="wrap">   
        <form class="login-form" action="login.php" method="post">  <!-- 로그인 폼 -->
            <input type="text" name="id" placeholder="ID" required>  <!-- ID 입력 필드 -->
            <input type="password" name="pw" placeholder="PW" required>  <!-- 비밀번호 입력 필드 -->
            <label>
                <input type="checkbox" name="remember"> 자동 로그인  <!-- 자동 로그인 옵션 -->
            </label>
            <input type="submit" value="로그인">  <!-- 로그인 버튼 -->
        </form> 
</div>
        <div class="link-container">  <!-- 링크 컨테이너 -->
        <a href="findid.php">ID 찾기</a> |  <!-- ID 찾기 링크 -->
        <a href="#">PW 찾기</a> |  <!-- PW 찾기 링크 -->
        <a href="signup.php">회원가입</a>  <!-- 회원가입 링크 -->
</div>
</body>
</html>
