<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/QLHD/cthoadon.css"/>
    <title>Chi tiết hóa đơn</title>
</head>
<body>
    <?php include './connect.php'; ?>
    
    <h1 class="title">Chi tiết đơn hàng</h1>
    <table>
    <!-- TT HOA DON -->
    <?php 
        $qr = "SELECT * FROM hoadon where MaHD='".$_GET['id']."'";
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td class="title-cthd">Hóa đơn</td><td class="content-cthd"><?php echo $row['MaHD']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Ngày đặt hàng</td><td class="content-cthd"><?php echo $row['NgayHD'] ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Email</td><td class="content-cthd"><?php echo $row['TenDangNhap']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Ghi chú</td><td class="content-cthd"><?php echo ($row['GhiChu']=="") ? "Không": $row['GhiChu']; ?></td>
        </tr>
        <?php }}?>
    <!-- TT TAIKHOAN -->
    <?php 
        $qr = "SELECT TenDangNhap FROM hoadon where MaHD='".$_GET['id']."'";
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result))
        $qr1 = "SELECT * FROM taikhoan where TenDangNhap='".$row['TenDangNhap']."'";}
        $result1 = mysqli_query($conn, $qr1);
        if(mysqli_num_rows($result1)>0){
            while($row1 = mysqli_fetch_array($result1)){
    ?>
        <tr>
            <td class="title-cthd">Khách hàng</td><td class="content-cthd"><?php echo $row1['HoTen']; ?></td>
        </tr>
        <tr>
            <td class="title-cthd">Địa chỉ</td><td class="content-cthd"><?php echo $row1['DiaChi']; ?></td>
        </tr>
    <?php }}?>
    <!-- San pham trong hoa don -->
    </table>
    <br />
    <table class="table table-bordered table-hover table-1">
  <thead class="table-success">
    <tr>
      <th scope="col" class="title-table">STT</th>
      <th scope="col" class="title-table">Tên sản phẩm</th>
      <th scope="col" class="title-table">Đơn giá</th>
      <th scope="col" class="title-table">Tỷ lệ KM</th>
      <th scope="col" class="title-table">Số lượng</th>
      <th scope="col" class="title-table">Thành tiền</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $qr = "SELECT ct.MaSP,TenSP,HinhAnh,ct.GiaGoc,ct.TyLeKM,ct.SoLuongMua FROM cthoadon ct, sanpham sp where ct.MaSP=sp.MaSP and MaHD='".$_GET['id']."'";
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            $count =0;
            $tongtien = 0;
            while($row = mysqli_fetch_array($result)) {   
                $count++;
                $tongtien +=  $row['SoLuongMua']*$row['GiaGoc']-($row['SoLuongMua']*$row['GiaGoc']*$row['TyLeKM'])/100;
                
    ?>
      <tr>
      <td style="font-weight: bold"><?php echo $count?></td>
      <td><?php echo $row['TenSP'];?></td>
      <td><?php echo number_format($row['GiaGoc'],0,",",".")." VNĐ";?></td>
      <td><?php echo $row['TyLeKM']." %";?></td>
      <td><?php echo $row['SoLuongMua'];?></td>
      <td><?php echo number_format($row['SoLuongMua']*$row['GiaGoc']-($row['SoLuongMua']*$row['GiaGoc']*$row['TyLeKM'])/100,0,",",".")." VNĐ";?></td>  
    </tr>
    <?php }}?>
  </tbody>
    <tr>
           <td class="title-cthd" colspan="5" style="text-align: right;padding-right:5%;font-size: 20px;">Tổng tiền</td><td class="content-cthd" style="font-weight: bold  ;color:red;font-size: 20px;"><?php if(isset($tongtien)&&$tongtien!=null) echo number_format($tongtien,0,",",".")." VNĐ"; ?></td>
    </tr>
</table>
<?php
if(isset($_GET["fc"])){
    switch($_GET["fc"]){
        case '1': echo "<a href='./index.php?url=hdchoduyet' class='btn btn-success btn-cthd'>Quay về</a>";break;
        case '2': echo "<a href='./index.php?url=hddagiao' class='btn btn-success btn-cthd'>Quay về</a>";break;
        case '3': echo "<a href='./index.php?url=hddahuy' class='btn btn-success btn-cthd'>Quay về</a>";break;
        case '4': echo "<a href='./index.php?url=hddanggiao' class='btn btn-success btn-cthd'>Quay về</a>";break;
        case '5': echo "<a href='./index.php?url=thongke' class='btn btn-success btn-cthd'>Quay về</a>";break;
        default: echo "<a href='./index.php?url=hdchoduyet' class='btn btn-success btn-cthd'>Quay về</a>";break;
    }
}
?>
</body>
</html>