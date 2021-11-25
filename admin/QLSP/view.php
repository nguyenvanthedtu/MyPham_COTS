<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/QLSP/QLSP.css"/>
    <link rel="stylesheet" href="./assets/css/QLSP/view.css"/>
    <link rel="stylesheet" href="./assets/css/QLSP/QLSP_add.css"/>
    <link rel="stylesheet" href="./assets/css/index.css"/>
</head>
<body>
<?php include './connect.php'; 
      $id=$_GET["id"];
  if(isset($_SESSION['MaNCC'])) $prd_supplier=$_SESSION['MaNCC'];

?>

    <h1 class="title">Chi tiết sản phẩm</h1>
  <table class="table" style="text-align:center;">
  <tbody>
      <?php
      $sql="SELECT sp.MaSP,sp.TenSP,nx.GiaXuat,sp.HinhAnh,sp.MaDM,sp.MaNCC,sp.TrangThai,nx.SoLuongNhap,sp.MoTa FROM sanpham as sp,nhapxuat as nx where sp.MaSP=$id and nx.MaSP=$id ";
      
      $result = mysqli_query($conn,$sql);
     
      if(mysqli_num_rows($result)>0){
        $count=0;
        while($row=mysqli_fetch_array($result)){
            $count++;
      ?>
        <tr>
        <td class="title-cthd">Mã sản phẩm</td><td class="content-cthd"><?php echo $row['MaSP'] ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Tên sản phẩm</td><td class="content-cthd"><?php echo $row['TenSP'] ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Đơn giá</td><td class="content-cthd"><?php echo number_format($row['GiaXuat'],0,",",".")." VNĐ"; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Hình ảnh</td><td class="content-cthd"><img  class="image" src="./assets/images/images_product/<?php echo $row['HinhAnh'] ?>"></td>
        </tr>
        <tr>
        <td class="title-cthd">Mã danh mục</td><td class="content-cthd"><?php echo $row['MaDM']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Mã nhà cung cấp</td><td class="content-cthd"><?php echo $row['MaNCC']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Trạng Thái</td><td class="content-cthd"><?php if($row['TrangThai']==1) echo "Đang hiển thị";
        else echo "Chưa hiển thị"?></td>
        </tr>
        <tr>
        <td class="title-cthd">Số lượng</td><td class="content-cthd"><?php echo $row['SoLuongNhap']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Mô tả</td><td class="content-cthd"><textarea readonly><?php echo $row['MoTa']; ?></textarea></td>
        </tr>
    <?php }}?>
  </tbody>
</table>
    <button onclick="goBack()" type="button" class="btn-back1"><i class="fas fa-hand-point-left" id="icon"></i></button>

</body>
</html>
<script>
    function goBack(){
      window.location.href="./index.php?url=qlsanpham"
}


</script>
