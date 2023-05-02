<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main_page</title>
</head>
<body>
    <form action="check_login.php" method="post">
        <label for="id">ID</label>
        <input type="text" id="id" name="login_id">
    <br>
        <label for="password">password</label>
        <input type="password" id="password" name="login_password">
    <br>
    <button type="submit" >LOGIN</button>
    </form>
    <a href="sign_up_page.php">회원가입</a>
    <span> / </span>
    <a href="id_search.php">아이디 찾기</a>
    <span> / </span>
    <a href="pw_search.php">비밀번호 찾기</a>
</body>
</html>