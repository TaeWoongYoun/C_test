<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 및 회원가입 페이지</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <button id="login">로그인</button>
    <button id="join">회원가입</button>

    <form action="login.php" method="post">
        <input type="text" name="userid" id="userid" require>
        <input type="password" name="userpw" id="userpw" require>
        <input type="submit" value="제출">
        <input type="reset" value="취소">
    </form>

    <script src="jquery-1.12.3.js"></script>
    <script src="index.js"></script>
</body>
</html>