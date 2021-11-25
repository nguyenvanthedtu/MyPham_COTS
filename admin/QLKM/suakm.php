<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/QLKM/suakm.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <title>Sửa khuyến mãi</title>
</head>
<body>
<?php 
    include '../admin/connect.php';
    if(isset($_POST['edit'])){
        $name = $_POST['name'];
        $fromdate = $_POST['from-date'];
        $todate = $_POST['to-date'];
        $qr = "update khuyenmai set TuNgay='$fromdate',DenNgay='$todate' where MaKM='".$_GET['id']."'";
        $result = mysqli_query($conn,$qr);
        if($result>0) echo "<script>window.location.href='./index.php?url=khuyenmai&kq=3&page=1'</script>";
    }
    $sql = "SELECT MaKM,TenKM,Date(TuNgay) as FromDay,Date(DenNgay) as ToDay,TrangThai FROM khuyenmai WHERE MaKM='".$_GET['id']."'";
    $rows = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($rows)){
?>
<form method="post" action="#">
  <div class="container">
    <h1 class="title-reg">Sửa khuyến mãi</h1>
    <hr>
    <label><b>Tên khuyến mãi</b></label>
    <input type="text" placeholder="Nhập tên khuyến mãi" name="name" value="<?php echo $row['TenKM'];?>" required>

    <label><b>Từ ngày</b></label>
    <input type="date" name="from-date" value="<?php echo $row['FromDay'] ?>" id="fromdate" min="<?php echo date("Y-m-d"); ?>" required>

    <label><b>Đến ngày</b></label>
    <input type="date" name="to-date" value="<?php echo $row['ToDay'] ?>" id="todate" required>
    
    <hr>
    <button type="submit" class="addbtn" name="edit">Sửa khuyến mãi</button>
  </div>
</form>
<?php } ?>
          <!-- Xu ly sua khuyen mai -->
<?php 
  if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $fromdate = $_POST['from-date'];
    $todate = $_POST['to-date'];
    $id = $_GET['id'];
    $qr = "update khuyenmai set TenKM='$name',TuNgay='$fromdate',DenNgay='$todate' where MaKM='$id'";
    $result = mysqli_query($conn, $qr);
  }
?>
<table class="table table-bordered table-hover table-2">
  <thead class="table-success">
    <tr>
    <th scope="col" class="title-table" style="width: 5%">STT</th>
      <th scope="col" class="title-table" style="width: 7%">Mã sản phẩm</th>
      <th scope="col" class="title-table" style="width: 15%">Tên sản phẩm</th>
      <th scope="col" class="title-table" style="width: 7%">Tỷ lệ KM</th>
      <th scope="col" class="title-table" style="width: 15%">Ghi chú</th>
      <th scope="col" class="title-table" style="width: 7%">Số lượng KM</th>
      <th scope="col" class="title-table" style="width: 10%">Chức năng</th>
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
      <td>
        <a href="./index.php?url=suactkm&id=<?php echo $_GET['id'];?>&ma=<?php echo $row['MaSP'];?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
        <a href="./index.php?url=xoakm&id=<?php echo $_GET['id'];?>&function=2&ma=<?php echo $row['MaSP'];?>" onclick="return confirm('Bạn có muốn xóa đợt khuyến mãi này?')" class="btn btn-danger"><i class="fas fa-times"></i></a>
      </td>   
    </tr>
    <?php }}else{?>
      <tr>
        <td colspan="7">Hiện chưa có sản phẩm nào cho đợt khuyến mãi này!</td>
      </tr>
      <?php }?>
  </tbody>
</table>
<a href="./index.php?url=khuyenmai" class="btn btn-success btn-suakm">Quay về</a>
<?php if(isset($_GET['kq'])&&$_GET['kq']==1) {?>
  <script>swal("","Xóa thành công","success")</script><?php } ?>
</body>
</html>