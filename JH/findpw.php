<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find PW</title>
    <link href="css/findpw.css" rel="stylesheet">
</head>
<body> 
    <div class="container">
        <h1>PW 찾기</h1>
        <form action="resetpw.php" method="post">
            <input type="text" id="username" name="username" placeholder="ID" required>

            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="E-Mail" required>
            </div>
            
            <div class="button-container">
                <button type="button">본인 확인 메일 발송</button>
            </div>

            <div class="verification-container">
                <div class="verification-input-group">
                    <input type="text" id="verification_code" name="verification_code" placeholder="인증번호" required>
                    <button type="button" id="verification_button">인증</button>
                </div>
            </div>
            
            <button type="submit" class="submit-button">확인</button>
        </form>
    </div>
</body>
</html>