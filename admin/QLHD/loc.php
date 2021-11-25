<?php
 include("connect.php");
if(isset($_POST['filter'])){
                $fromdate = trim($_POST['fromdate']);
                $todate = trim($_POST['todate']);
                if(isset($_GET["url"])){
                  switch($_GET["url"]){
                    case "hdchoduyet": $status = "Chờ xét duyệt"; break;
                    case "hddanggiao": $status = "Đang giao"; break;
                    case "hddagiao": $status = "Đã giao"; break;
                    case "hddahuy": $status = "Đã hủy"; break;
                  }
                }
                $sql1 = "SELECT hd.MaHD,hd.TenDangNhap,hd.NgayHD,hd.TrangThai,cthd.MaSP FROM hoadon hd,cthoadon cthd,sanpham sp where hd.mahd=cthd.MaHD and sp.masp=cthd.MaSP and hd.TrangThai= 'Chờ xét duyệt' and cthd.MaSP=sp.MaSP and sp.MaNCC='$mancc' and hd.NgayHD between date('$fromdate') and date('$todate') and hd.TrangThai='$status'";
                $result = mysqli_query($conn,$sql1);
}
mysqli_close($conn);
?>