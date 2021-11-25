<?php
    include './connect.php';
    if(isset($_GET['id'])&&isset($_GET['function']))
    {
        switch($_GET['function']){
            case '1':
                $qr = "update hoadon set TrangThai=N'Đang giao' where MaHD='".$_GET['id']."'";
                $result = mysqli_query($conn,$qr);
                echo "<script>window.location.href='./index.php?url=hddanggiao&page=1&kq=1'</script>"; 
                break;
            case '2':
                $qr = "update hoadon set TrangThai=N'Đã hủy' where MaHD='".$_GET['id']."'";
                $result = mysqli_query($conn,$qr);
                echo "<script>window.location.href='./index.php?url=hddahuy&page=1&kqa=1'</script>";
                break;
            case '3':
                $qr = "update hoadon set TrangThai=N'Đã giao' where MaHD='".$_GET['id']."'";
                $result = mysqli_query($conn,$qr);
                echo "<script>window.location.href='./index.php?url=hddagiao&page=1&kq=1'</script>";
                break;
            case '4':
                $qr = "delete from hoadon where MaHD='".$_GET['id']."'";
                $result = mysqli_query($conn,$qr);
                echo "<script>window.location.href='./index.php?url=hddahuy&page=1&kq=1'</script>";
                break;
            case '5':
                $qr = "update hoadon set TrangThai=N'Chờ xét duyệt' where MaHD='".$_GET['id']."'";
                $result = mysqli_query($conn,$qr);
                echo "<script>window.location.href='./index.php?url=hdchoduyet&page=1&kq=5'</script>";
                break;
            case '6':
                $qr = "update hoadon set TrangThai=N'Đang giao' where MaHD='".$_GET['id']."'";
                $result = mysqli_query($conn,$qr);
                echo "<script>window.location.href='./index.php?url=hddanggiao&page=1&kq=5'</script>";
                break;
            default: echo "<script>alert('Lỗi không hợp lệ')</script>";break;
        }
       
    }
?>