<?php
include("conn/ws-conn.php");
include("page-util.php");
session_start();
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
if ($username == "" or $password == "") {
    $_SESSION["error"] = "用户名或密码不能为空";
    page_rollback();
} else {
    $data = array();
    $data["username"] = $username;
    $data["password"] = $password;
    $result = http_post("user/login", $data);
    if ($result["error"] != "") {
        $_SESSION["error"] = "用户名或密码不正确";
        page_rollback();
    } else {
        $_SESSION["id"] = $result["id"];
        $_SESSION["username"] = $result["username"];
        page_redirect("index.php");
    }
}
?>
