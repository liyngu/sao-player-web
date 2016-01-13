<?php
function page_rollback() {
?>
  <script language="javascript">
     history.back();
  </script>
<?php
}

function page_redirect($path) {
?>
  <script language="javascript">
     location.href = "<?php echo $path;?>";
  </script>
<?php
}
?>
