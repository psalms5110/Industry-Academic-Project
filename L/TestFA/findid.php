<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find ID</title>
    <link href="../css/findid.css" rel="stylesheet">
</head>
<body> 
    <div class="container">
        <h1>ID 찾기</h1>

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
        
        <input type="submit" value="확인" class="submit-button">
    </div>
</body>
</html>

