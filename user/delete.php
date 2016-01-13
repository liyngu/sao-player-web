<?php
session_start();
include("../conn/ws-conn.php");
include("../page-util.php");
$id = $_GET[id];
if ($id != "") {
    http_delete("user/".$id);
}
page_redirect("../index.php?action=user");
?>
