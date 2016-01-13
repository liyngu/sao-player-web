<form action="user/update-chk.php" method="POST">
<?php
function create_form_line($sub_title, $name, $user, $enable = true) {
?>
<div class="form-line">
  <span class="sub-title"><?php echo $sub_title  ?></span>
  <input type="text" <?php
  if ($name != "id") {
      echo "name='$name'";
  }
  $value = $user[$name];
  if(isset($value)) {
     echo "value='$value'";
  }
  if (!$enable) {
     echo "disabled='disabled'";
  }
  ?> />
</div>
<?php
}
session_start();
$id = $_GET[id];
if (isset($id)) {
   $user = http_get("user/".$id);
   create_form_line("ID", "id", $user, false);
   create_form_line("用户名：", "username", $user, false);
} else {
   create_form_line("用户名：", "username", $user);
}
create_form_line("密码：", "password");
?>
  <input name="id" type="hidden" value="<?php echo $user[id] ?>"/>
  <input type="submit" value="确认" />
</form>
