<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원 가입</title>
    <link href="../../styles/signup.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="signup-container">
    <form id="signupForm" action="signup.php" method="post">
        <div class="form-group">
            <input type="text" id="name" name="name" placeholder="이름" required>
            <input type="text" id="username" name="username" placeholder="ID" required>
            <input type="password" id="password" name="password" placeholder="PW" required>
        </div>

        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="E-Mail" required>
            <button type="button" id="sendVerificationEmail">본인 확인 메일 발송</button>
        </div>

        <button type="submit" id="submitForm">가입하기</button>
    </form>
</div>

<script>
$(document).ready(function() {
    $('#sendVerificationEmail').click(function(e) {
        e.preventDefault();
        var email = $('#email').val();
        if(email) {
            $.post('send_verification.php', {email: email}, function(data) {
                alert('인증 메일이 발송되었습니다. 메일을 확인해주세요.');
            }).fail(function() {
                alert('메일 발송에 실패했습니다.');
            });
        }
    });

    $('#verifyEmail').click(function(e) {
        e.preventDefault();
        var code = $('#verification_code').val();
        if(code) {
            $.post('verify_code.php', {code: code}, function(data) {
                if(data.success) {
                    alert('인증에 성공하였습니다.');
                } else {
                    alert('인증 코드가 일치하지 않습니다.');
                }
            }, 'json');
        }
    });
});
</script>
</body>
</html>