<?php
    include ("../admin/connect.php");
    if(isset($_GET["id"])){
        $id=$_GET['id'];
        $sql="Delete from danhmuc where MaDM = '$id'";
        $old=mysqli_query($conn,$sql);
        if($old>0){
            header("location:./index.php?url=qldm&kq=3");
        }
    }
    if(isset($_GET["key"])){
        $id=$_GET['key'];
        $sql="Delete from danhmuc where MaDM = '$id'";
        $old=mysqli_query($conn,$sql);
        if($old>0){
            header("location:./index.php?url=duyet&kq=3");
        }
    }
    

?>