<?php 
    include '../admin/connect.php'; 
    $id=$_GET['id'];
    $sql="update hoadon set TrangThai='Đã hủy' where MaHD='$id'";
    $sql1 = "select MaSP,SoLuongMua from cthoadon where MaHD='$id'";
    $result = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            $sl = $row["SoLuongMua"];
            $MaSP = $row["MaSP"];
            $qr = "update sanpham set SoLuongTon=SoLuongTon+'$sl' where MaSP='$MaSP'";
            // $qr1 = "select * from ctkhuyenmai where MaHD='$id' and MaSP='$MaSP'";
            // $result1 = mysqli_query($conn,$qr1);
            // if(mysqli_num_rows($result1)>0){
            //     while($row = mysqli_fetch_array($result1)){
                    $qr2 = "update ctkhuyenmai set SoLuongKM=SoLuongKM+'$sl' where MaSP='$MaSP'";
                    mysqli_query($conn, $qr2);
              //  }
           // }
            mysqli_query($conn, $qr);
        } 
    }
    $query=mysqli_query($conn,$sql);
    header('Location: ./user.php?rs=1');
?>