<?php
require("conn/ws-conn.php");
?>
<!DOCTYPE HTML>
<html>
  <head>
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <script type="text/javascript">
    $(function() {
        $("#login").on("click", function() {
            <?php
           // http_get("user/login");
            ?>
        });
    });
    </script>
  </head>
  <body>
    <form id="loginForm" action="index.php" method="POST">
      <div>
         <span>用户名：<span/>
         <input name="username" type="text" />
      </div>
      <div>
         <span>密码：<span/>
         <input name="password" type="text" />
      </div>
      <div>
         <input id="login" type="submit" value="登录" />
      </div>
    </form>
  </body>
</html>

