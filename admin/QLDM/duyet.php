<?php
include ("../admin/connect.php");
if(isset($_GET["id"])){
    $id=$_GET['id'];
    $sql="update danhmuc set TrangThai='1' where MaDM = '$id'";
    $old=mysqli_query($conn,$sql);
    header("location:./index.php?url=duyet&kq=1");
}
?>