<?php
session_start();
include("../conn/ws-conn.php");
include("../page-util.php");
$id = $_POST[id];
$username = $_POST[username];
$password = $_POST[password];
$data = array();
$data[id] = $id;
$data[username] = $username;
$data[password] = $password;
if ($id == "") {
    http_post("user", $data);
} else {
    http_put("user/$id", $data);
}
page_redirect("../index.php?action=user");
?>
