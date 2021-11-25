<?php
 session_start();
 $gid= $_POST["id"];
 unset($_SESSION['cart'][$gid]);
 echo "Xóa thành công";
?>
