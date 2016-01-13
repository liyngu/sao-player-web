<div>
  <a href="index.php?action=user/update">创建新用户</a>
</div>
<div class="list">
  <ul class="title">
    <li class="id">ID</li>
    <li class="username">用户名</li>
    <li class="type">用户类型</li>
    <li class="operation">操作</li>
  </ul>
  <?php
  $result = http_get("user");
  foreach ($result as $user) {
      echo "<ul>";
      echo "<li class='id'>$user[id]</li>";
      echo "<li class='id'>$user[username]</li>";
      echo "<li class='id'>$user[role]</li>";
      echo "<li class='id'>";
      echo "<a href='index.php?action=user/update&id=$user[id]'>修改</a>";
      echo "<a href='user/delete.php?id=$user[id]'>删除</a>";
      echo "<a href='index.php?action=user/detail&id=$user[id]'>查看</a>";
      echo "</li>";
      echo "</ul>";
  }
  ?>
<div>
