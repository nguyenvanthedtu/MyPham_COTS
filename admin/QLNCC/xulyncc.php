<?php
include ("../admin/connect.php");
if(isset($_GET["id"])&&isset($_GET["rol"])){
    $id=$_GET['id'];
    $rol=$_GET['rol'];
    switch($rol){
        case "1":   $sql="update taikhoan set TrangThai='1' where TenDangNhap = '$id'";
                    mysqli_query($conn,$sql);
                    header("location:./index.php?url=qlncc&kq=1");break;
        case "2":   $sql="delete from taikhoan where TenDangNhap = '$id'";
                    mysqli_query($conn,$sql);
                    header("location:./index.php?url=qlncc&kq=3");break;
    }
    
}
?>