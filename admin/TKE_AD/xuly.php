<?php
 include("connect.php");
 $sql1 = "SELECT MaHD FROM hoadon where TrangThai='Đã giao' and MaNCC='$mancc'";
 $result1 = mysqli_query($conn,$sql1);
?>