<?php
 include("connect.php");
if(isset($_POST['filter'])){
                $fromdate = trim($_POST['fromdate']);
                $todate = trim($_POST['todate']);
                $sql1 = "SELECT * FROM nhacungcap ncc,hoadon hd where ncc.MaNCC=hd.MaNCC and hd.TrangThai= 'Đã giao' and hd.NgayHD between date('$fromdate') and date('$todate') limit $page,$rows";
                $result = mysqli_query($conn,$sql1);
                
}
mysqli_close($conn);
?>