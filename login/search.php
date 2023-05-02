<?php
define("DB_CON",$_SERVER["DOCUMENT_ROOT"]."/practice/login");
define("URL",DB_CON."/common/common_db.php");
include_once(URL);
$rqs_method = $_SERVER["REQUEST_METHOD"];
if($rqs_method === "POST"){
    if(isset($_POST["login_tel"])){
    $arr_post = $_POST;
    $result = id_search($arr_post);
    var_dump($result);
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ID는 <?php echo $result["login_id"] ?>입니다.</p>
</body>
</html>