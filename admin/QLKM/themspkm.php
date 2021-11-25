<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/QLKM/themspkm.css"/>
    <title>Thêm sản phẩm khuyến mãi</title>
</head>
<body>
<?php include './connect.php'; ?>
<!-- Code xu ly them san pham KM -->
<?php 
    if(isset($_SESSION["MaNCC"])) $mancc = $_SESSION["MaNCC"];
    if(isset($_POST['add'])){
        $sanpham = $_POST['sanpham'];
        $ratio = $_POST['ratio'];
        $note = $_POST['note'];
        $quantity = $_POST['quantity'];
        $id = $_GET['id'];
        foreach($sanpham as $key => $value){
            $qr = "insert into ctkhuyenmai(MaKM,MaSP,TyLeKM,GhiChu,SoLuongKM) values ('$id','$value','$ratio','$note','$quantity')";
            $result = mysqli_query($conn,$qr);
        }
        echo "<script>window.location.href='./index.php?url=khuyenmai&kq=1&page=1';</script>";
    }
?>
<!-- -------------------------------------------------------------------- -->
 <div class="container-spkm">   
    <h1 class="title">Thông tin đợt khuyến mãi</h1>
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
    <form method="post" action="">
  <div class="container">
    <h1 class="title-reg">Thêm sản phẩm cho đợt khuyến mãi</h1>
    <hr>
    <label><b>Tên sản phẩm </b></label>
    <select multiple name="sanpham[]" size="5"> 
    <?php $qr = "select MaSP,TenSP from sanpham where MaNCC='$mancc'"; 
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
    ?>
   <option value="<?php echo $row['MaSP'];?>"><?php echo $row['TenSP'];?></option>
    <?php }}?>
    </select>
    </br>
    <label><b>Tỷ lệ KM</b></label>
    <input type="number" name="ratio" min="1" placeholder="Tỷ lệ KM" required>

    <label><b>Ghi chú</b></label>
    <textarea type="text" name="note" placeholder="Ghi chú"></textarea>
    
    <label><b>Số lượng khuyến mãi</b></label>
    <input type="number" name="quantity" min="1" placeholder="Số lượng" required>
    <hr>
    <button type="submit" class="addbtn" name="add">Thêm sản phẩm khuyến mãi</button>
    <button class="addbtn" onclick="back()">Quay về</button>
  </div>
</form>
 </div>
 <script>
     function back() {
         window.location.href="./index.php?url=khuyenmai";
     }
 </script>
</body>
</html>