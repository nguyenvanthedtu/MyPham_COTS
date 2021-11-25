<?php 
    include '../admin/connect.php';
        $qr = "select MaKM,TuNgay from khuyenmai where TuNgay = CURRENT_DATE";
        $kq = mysqli_query($conn, $qr);
        if(mysqli_num_rows($kq)>0){
            while($row = mysqli_fetch_array($kq)){
                $makm = $row['MaKM'];
                $qr1 = "update khuyenmai set TrangThai=N'Đang khuyến mãi' where MaKM='$makm'";
                mysqli_query($conn, $qr1);
            }
        }
    
        $qr = "select MaKM,DenNgay from khuyenmai where DenNgay<CURRENT_DATE";
        $kq = mysqli_query($conn, $qr);
        if(mysqli_num_rows($kq)>0){
            while($row = mysqli_fetch_array($kq)){
                $makm = $row['MaKM'];
                $qr1 = "update khuyenmai set TrangThai=N'Hết khuyến mãi' where MaKM='$makm'";
                mysqli_query($conn, $qr1);
            }
        }
        
        $qr = "select MaKM,TuNgay from khuyenmai where TuNgay>CURRENT_DATE";
        $kq = mysqli_query($conn, $qr);
        if(mysqli_num_rows($kq)>0){
            while($row = mysqli_fetch_array($kq)){
                $makm = $row['MaKM'];
                $qr1 = "update khuyenmai set TrangThai=N'Chưa khuyến mãi' where MaKM='$makm'";
                mysqli_query($conn, $qr1);
            }
        }
    

?>