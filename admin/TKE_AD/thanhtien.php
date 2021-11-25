<?php
 include("connect.php");
 $qr1= "SELECT GiaGoc,ct.TyLeKM,ct.SoLuongMua FROM cthoadon ct, sanpham sp where ct.MaSP=sp.MaSP and MaHD='$MaHD'";
 $result2 = mysqli_query($conn, $qr1);
?>