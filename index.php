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
          include "top.php"
        ?>
      </div>
      <div id="left">
        <?php
          include "left.php"
        ?>
      </div>
      <div id="main">
        <?php
          include "main.php"
        ?>
      </div>
    </div>
  </body>
</html>

