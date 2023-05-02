<?php
define("DB_CON",$_SERVER["DOCUMENT_ROOT"]."/practice/login");
define("URL",DB_CON."/common/common_db.php");
include_once(URL);
$rqs_method = $_SERVER["REQUEST_METHOD"];
if($rqs_method === "POST"){
$arr_post = $_POST;
sign_up($arr_post);
header("Location: login_page.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="" method="post">
        <label for="id">ID</label>
        <input type="text" id="id" name="login_id">
    <br>
        <label for="password">password</label>
        <input type="password" id="password" name="login_password">
    <br>
        <label for="email">email</label>
        <input type="email" id="email" name="login_email">
    <br>
        <label for="tel">tel</label>
        <input type="tel" id="tel" name="login_tel">
    <br>
    <button type="submit">가입</button>
    <button type="button" onclick="location.href='login_page.php'">취소</button>
    </form>
</body>
</html>