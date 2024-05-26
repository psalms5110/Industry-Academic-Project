<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제 등록</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-section {
            margin-bottom: 20px;
        }
        .form-section label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-section input[type="text"], 
        .form-section textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-section input[type="file"] {
            padding: 8px;
        }
        .button-group {
            display: flex;
            flex-wrap: wrap;
        }
        .button-group button {
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f5f5f5;
            cursor: pointer;
            flex: 1 0 20%;
            box-sizing: border-box;
        }
        .button-group button.active {
            background-color: #dcdcdc;
        }
        .submit-button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
    </style>
    <script>
        function toggleSelection(button, groupName) {
            const buttons = document.querySelectorAll(`.${groupName} button`);
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        }
    </script>
</head>
<body>
    <form>
        <div class="form-section difficulty-selection">
            <label>난이도 선택</label>
            <div class="button-group difficulty-buttons">
                <button type="button" onclick="toggleSelection(this, 'difficulty-buttons')">입문</button>
                <button type="button" onclick="toggleSelection(this, 'difficulty-buttons')">초급</button>
                <button type="button" onclick="toggleSelection(this, 'difficulty-buttons')">중급</button>
                <button type="button" onclick="toggleSelection(this, 'difficulty-buttons')">고급</button>
            </div>
        </div>

        <div class="form-section category-selection">
            <label>분야 선택</label>
            <div class="button-group category-buttons">
                <button type="button" onclick="toggleSelection(this, 'category-buttons')">웹해킹</button>
                <button type="button" onclick="toggleSelection(this, 'category-buttons')">리버싱</button>
                <button type="button" onclick="toggleSelection(this, 'category-buttons')">암호학</button>
                <button type="button" onclick="toggleSelection(this, 'category-buttons')">포렌식</button>
                <button type="button" onclick="toggleSelection(this, 'category-buttons')">클라우드</button>
                <button type="button" onclick="toggleSelection(this, 'category-buttons')">시스템해킹</button>
                <button type="button" onclick="toggleSelection(this, 'category-buttons')">기타</button>
            </div>
        </div>

        <div class="form-section">
            <label for="problem-name">문제 이름</label>
            <input type="text" id="problem-name" name="problem-name">
        </div>

        <div class="form-section">
            <label for="problem-description">문제 설명</label>
            <textarea id="problem-description" name="problem-description" rows="4"></textarea>
        </div>

        <div class="form-section">
            <label for="problem-file">문제 파일 업로드</label>
            <input type="file" id="problem-file" name="problem-file">
        </div>

        <div class="form-section">
            <label for="flag-input">Flag 정답 입력</label>
            <input type="text" id="flag-input" name="flag-input">
        </div>

        <button type="submit" class="submit-button">문제 등록하기</button>
    </form>
</body>
</html>
