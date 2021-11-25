<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/QLKM/ctkhuyenmai.css"/>
    <title>Chi tiết khuyến mãi</title>
</head>
<body>
<?php include './connect.php'; ?>
    <div class="content-ctkm">
    <h1 class="title">Chi tiết khuyến mãi</h1>
    <table>
    <!-- TT DOT KHUYEN MAI -->
    <?php 
        $qr = "SELECT * FROM khuyenmai where MaKM='".$_GET['id']."'";
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
        <td class="title-cthd">Mã khuyến mãi</td><td class="content-cthd"><?php echo $row['MaKM']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Tên khuyến mãi</td><td class="content-cthd"><?php echo $row['TenKM'] ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Từ ngày</td><td class="content-cthd"><?php echo $row['TuNgay']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Đến ngày</td><td class="content-cthd"><?php echo $row['DenNgay']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Trạng Thái</td><td class="content-cthd"><?php echo $row['TrangThai']; ?></td>
        </tr>
        <?php }}?>
    </table>
    <br />
    <!-- TT SAN PHAM KM -->
    <table class="table table-bordered table-hover table-1">
  <thead class="table-success">
    <tr>
      <th scope="col" class="title-table" style="width: 1%">STT</th>
      <th scope="col" class="title-table" style="width: 3%">Mã sản phẩm</th>
      <th scope="col" class="title-table" style="width: 5%">Tên sản phẩm</th>
      <th scope="col" class="title-table" style="width: 3%">Tỷ lệ KM</th>
      <th scope="col" class="title-table" style="width: 5%">Ghi chú</th>
      <th scope="col" class="title-table" style="width: 3%">Số lượng KM</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $qr = "SELECT ct.MaSP,sp.TenSP,TyLeKM,GhiChu,SoLuongKM FROM ctkhuyenmai as ct,sanpham as sp where ct.MaSP = sp.MaSP and ct.MaKM='".$_GET['id']."'";
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            $count =0;
            while($row = mysqli_fetch_array($result)) {   
                $count++;
    ?>
      <tr>
      <td style="font-weight: bold"><?php echo $count?></td>
      <td><?php echo $row['MaSP'];?></td>
      <td style="word-wrap:break-word"><?php echo $row['TenSP'];?></td>
      <td><?php echo $row['TyLeKM']." %";?></td>
      <td style="word-wrap:break-word"><?php echo $row['GhiChu'];?></td>
      <td><?php echo $row['SoLuongKM'];?></td>
    </tr>
    <?php }}else{?>
      <tr>
        <td colspan="6">Hiện chưa có sản phẩm nào cho đợt khuyến mãi này!</td>
      </tr>
      <?php }?>
  </tbody>
</table>
<a href="./index.php?url=khuyenmai" class="btn btn-success btn-ctkm">Quay về</a>
    </div>
</body>
</html>