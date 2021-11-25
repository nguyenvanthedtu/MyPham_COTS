<?php 
    include '../admin/connect.php';
    if(isset($_GET['id'])&&isset($_GET['function']))
    {
        switch($_GET['function']){
            case '1':
                $qr = "delete from khuyenmai where MaKM='".$_GET['id']."'";
                $result = mysqli_query($conn,$qr);
                if($result==1) echo "<script>window.location.href='./index.php?url=khuyenmai&kq=2&page=1';</script>";
                break;
            case '2':
                $qr1 = "delete from ctkhuyenmai where MaKM='".$_GET['id']."' and MaSP='".$_GET['ma']."'";
                $result = mysqli_query($conn,$qr1);
                if($result==1) echo "<script>window.location.href='./index.php?url=suakm&id=".$_GET['id']."&kq=1';</script>";
                 break;
        }
       
    }
?>
