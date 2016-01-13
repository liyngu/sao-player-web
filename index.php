<?php
session_start();
include("conn/ws-conn.php");
?>
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <script type="text/javascript">
    $(function() {
        
    });
    </script>
    <style type="text/css">
div {
}
body {
    text-align: center;
}
#warpper {
    width: 1000px;
    margin: 0 auto;
}
#left {
    float: left;
    height: 800px;
width:200px;
}
#main {
float: right;
height :800px;
width:800px;
    </style>
  </head>
  <body>
    <div id="warpper">
      <div id="top">
        <?php
        include ("top.php");
        ?>
      </div>
      <div id="left">
        <?php
        include ("left.php");
        ?>
      </div>
      <div id="main">
        <?php
        switch ($_GET["action"]) {
            case "user":
                include ("user/list.php");
                break;
            case "user/detail":
                include("user/detail.php");
                break;
            case "user/update":
                include("user/update.php");
                break;
            case "music":
                include ("music/list.php");
                break;
            default:
                include ("main.php");
                break;
        }
        ?>
      </div>
    </div>
  </body>
</html>

