<?php 
    session_start();
    include '../admin/connect.php';
    if(isset($_POST['id'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $tendangnhap = $_SESSION['user'];
        $qr = "update taikhoan set HoTen='$name', SoDienThoai='$phone', DiaChi='$address',GioiTinh='$gender' where TenDangNhap='$tendangnhap'";
        mysqli_query($conn, $qr);
        echo "Sửa thành công";
    }
?>