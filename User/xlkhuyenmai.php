<?php 
    include "../admin/connect.php";
    $qr = "SELECT km.MaKM,km.TrangThai,sp.HinhAnh,sp.MaSP,sp.TenSP,sp.DonGia,ct.TyLeKM FROM sanpham as sp,ctkhuyenmai as ct,khuyenmai as km WHERE sp.MaSP=ct.MaSP and ct.MaKM=km.MaKM and km.TrangThai='Đang khuyến mãi'";
    $result1 = mysqli_query($conn,$qr);
?>