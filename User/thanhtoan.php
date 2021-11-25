<?php include './head.php' ?>
<?php if(isset($_SESSION['user'])==null) echo "<script>window.location.href='../User/list_cart.php'</script>";?>
<link rel="stylesheet" href="./assets/css/thanhtoan.css">
<form method="post" action="">
<div class="order_group">
    <div class="order_info">
        <h3>THÔNG TIN NGƯỜI NHẬN</h3>
       
        <label>Họ Tên</label>
        <input type="text" name="name" required>
        <label>Địa chỉ</label>
        <input type="text" name="address" required>
        <label>Số điện thoại</label>
        <input type="text" name="phone" required>
        <label>Ghi chú</label>
        <textarea name="comment" cols="45" rows="8"></textarea>
      
    </div>
    <div class="order_product">
        <h3>ĐƠN HÀNG CỦA BẠN</h3>
        <table>
            <thead style="font-size:20px">
                <tr>
                    <th>SẢN PHẨM</th>
                    <th>SỐ LƯỢNG</th>
                    <th>ĐƠN GIÁ</th>
                    <th>TỶ LỆ KM</th>
                    <th>TẠM TÍNH</th>
                </tr>
            </thead>
            <tbody>
                <?php $tongtien=0; foreach ($_SESSION['cart'] as $list) {  ?>
                    <tr>
                        <td><?php echo $list['name']?></td>
                        <td><?php echo $list['sl']?></td>
                        <td><?php echo number_format($list['price'],'0',',','.')."&#8363;"?></td>
                        <td><?php echo $list['tylekm']." &percnt;"?></td>
                        <?php   $thanhtien=$list['price']*$list['sl']-($list['price']*$list['tylekm']/100);
                                $tongtien=$tongtien+$thanhtien;
                                $thanhtien=number_format($thanhtien,'0',',','.')."&#8363;";  ?>
                        <td class="order_tt"><?php echo $thanhtien ?></td> 
                    </tr>
                    <?php }?>
            </tbody>    
            <tfoot>  
                    <tr>
                        <td class="order_tt">Tạm tính</td> <td></td><td></td><td></td>
                        <td class="order_total"><?php echo number_format($tongtien,'0',',','.')."&#8363;"; ?></td>
                    </tr>
                    <tr>
                        <td class="order_tt">Tổng</td> <td></td><td></td><td></td>
                        <td class="order_total"><?php echo number_format($tongtien,'0',',','.')."&#8363;"; ?></td>
                    </tr>
            </tfoot>
        </table>
        <p class="button_order"><input type='submit' name='order'  id='order' value='ĐẶT HÀNG'></p> 
    </div>
</div>

</form>
<?php 
    if(isset($_POST['order'])){
        $tendangnhap = $_SESSION["user"]; 
        $NgayHD = date("Y-m-d");
        $GhiChu = $_POST['comment'];
        $TenKH = $_POST['name'];
        $SoDienThoai = $_POST['phone'];
        $DiaChi = $_POST['address'];
        $qr = "insert into hoadon(TenDangNhap,NgayHD,TrangThai,GhiChu,HoTenNN,SoDienThoaiNN,DiaChiNN) values('$tendangnhap','$NgayHD','Chờ xét duyệt','$GhiChu','$TenKH','$SoDienThoai','$DiaChi')";
        mysqli_query($conn,$qr);
        $qr1 = "select MaHD from hoadon order by MaHD desc limit 1";
        $kq = mysqli_query($conn,$qr1);
        $row = mysqli_fetch_array($kq);
        $MaHD = $row['MaHD'];
        foreach ($_SESSION['cart'] as $list) {
            $MaSP = $list['id'];
            $GiaGoc = $list['price'];
            $TyLeKM = $list['tylekm'];
            $Sl = $list['sl'];
            $sql = "insert into cthoadon (MaHD,MaSP,TenKH,GiaGoc,TyLeKM,SoLuongMua) values('$MaHD','$MaSP','$TenKH','$GiaGoc','$TyLeKM','$Sl')";
            $sql1 = "update sanpham set SoLuongTon=SoLuongTon-'$Sl' where MaSP='$MaSP'";
            $sql2 = "update ctkhuyenmai set SoLuongKM=SoLuongKM-'$Sl' where MaSP='$MaSP'";
            $sql3 = "update ctkhuyenmai set TyLeKM='0' where MaSP='$MaSP' and SoLuongKM<=0";
            mysqli_query($conn,$sql);
            mysqli_query($conn,$sql1);
            mysqli_query($conn,$sql2);
            mysqli_query($conn,$sql3);
        }
        unset($_SESSION['cart']);
        echo "<script>alert('Đặt hàng thành công')</script>";
        echo "<script>window.location.href='./list_cart.php'</script>";
    }
?>
<?php include './footer.php'?>