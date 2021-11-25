<?php
    include("../admin/connect.php");
    $mancc = $tenncc = $diachi = $sdt = $trangthai ="";
    if(isset($_GET["id"])){
        $ma = $_GET['id'];
        $sql = "select * from taikhoan tk, nhacungcap ncc where tk.tendangnhap=ncc.tendangnhap and MaNCC = '$ma'";
        $old = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($old);
        $mancc = $row[10];
        $tenncc = $row[11];
        $diachi = $row[12];
        $sdt = $row[13];
        $trangthai = $row[4];
    }

    if(isset($_POST['submit'])){    
        $mancc = $_GET['id'];
        $tenncc = $_POST["tenncc"];
        $diachi = $_POST["diachi"];
        $sdt = $_POST["sdt"];
        $trangthai = $_POST["trangthai"];
        $sql = "select * from taikhoan tk, nhacungcap ncc where tk.tendangnhap=ncc.tendangnhap and MaNCC = '$mancc'";
        $old = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($old);
        $ten = $row[0];
        $sql1 = "update nhacungcap set TenNCC = '$tenncc' , DiaChi='$diachi',SDT='$sdt' where MaNCC = '$mancc'";
        $sql2 = "update taikhoan set HoTen = '$tenncc' , TrangThai = '$trangthai', DiaChi='$diachi',SoDienThoai='$sdt' where TenDangNhap = '$ten'";
        $old1 = mysqli_query($conn,$sql2);
        mysqli_query($conn,$sql1);
        
    
    }
    

  
?>