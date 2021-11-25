<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/QLKM/suactkm.css"/>
    <title>Sửa chi tiết khuyến mãi</title>
</head>
<body>
<?php 
    include '../admin/connect.php';
    if(isset($_GET['id']) && isset($_GET['ma'])) {$id = $_GET['id'];$ma = $_GET['ma'];};
    if(isset($_POST['edit'])){
        $ratio = $_POST['ratio'];
        $note = $_POST['note'];
        $quantity = $_POST['quantity'];
        $qr = "update ctkhuyenmai set TyLeKM='$ratio',GhiChu='$note',SoLuongKM='$quantity' where MaKM='$id' and MaSP='$ma'";
        $result = mysqli_query($conn,$qr);
        if($result==1) echo "<script>window.location.href='./index.php?url=khuyenmai&kq=3&page=1'</script>"; 
    }
    $sql = "select ct.MaSP,sp.TenSP,ct.TyLeKM,ct.GhiChu,ct.SoLuongKM from ctkhuyenmai as ct,sanpham as sp where ct.MaSP=sp.MaSP and ct.MaKM='$id' and ct.MaSP='$ma'";
    $rows = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($rows)){
?>
<div class="container-suakm">
<form method="post" action="#">
  
    <h1 class="title-reg">Sửa chi tiết khuyến mãi</h1>
    <hr>
    <label><b>Mã sản phẩm</b></label>
    <input type="text" placeholder="Nhập tên khuyến mãi" name="id" value="<?php echo $row['MaSP'];?>" disabled>

    <label><b>Tên sản phẩm</b></label>
    <input type="text" name="name" value="<?php echo $row['TenSP'] ?>" disabled>

    <label><b>Tỷ lệ khuyến mãi</b></label>
    <input type="number" name="ratio" value="<?php echo $row['TyLeKM'] ?>" min="1" required>

    <label><b>Ghi chú</b></label>
    <input type="text" name="note" value="<?php echo $row['GhiChu'] ?>" required>

    <label><b>Số lượng khuyến mãi</b></label>
    <input type="number" name="quantity" value="<?php echo $row['SoLuongKM'] ?>" min="1" required>
    
    <hr>
    <button type="submit" class="addbtn" name="edit">Sửa khuyến mãi</button>
</form>
</div>
<?php } ?>
</body>
</html>