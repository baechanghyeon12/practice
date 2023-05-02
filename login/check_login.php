<?php
define("DB_CON",$_SERVER["DOCUMENT_ROOT"]."/practice/login");
define("URL",DB_CON."/common/common_db.php");
include_once(URL);

session_start();
$id = $_POST['login_id'];
$pw = $_POST['login_password'];
var_dump($id);
var_dump($pw);
$sql = "SELECT * FROM login WHERE login_id = '$id' AND login_password = '$pw'";
    $conn = null;
    db_conn($conn);
    $stmt = $conn->query($sql);
    $row = $stmt->fetchAll();
    if ($row != null) {
        $_SESSION['login_id'] = $row[0]['login_id'];
        $_SESSION['login_password'] = $row[0]['login_password'];
        echo "<script>location.replace('index.php');</script>";
        exit;
    }
    if($row == null){
        echo "<script>alert('Invalid username or password')</script>";
        echo "<script>location.replace('login_page.php');</script>";
        exit;
    }
?>