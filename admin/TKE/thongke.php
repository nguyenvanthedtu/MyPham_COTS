<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/TKE/thongke.css"/>
    <title>Thống kê</title>
</head>
<body>
    <?php include './connect.php';
    if(isset($_SESSION["MaNCC"])) $mancc = $_SESSION["MaNCC"];
    //Xu ly Pagination
    $sql = "SELECT * FROM hoadon where TrangThai= 'Đã giao' and MaNCC='$mancc'";
    $kq = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($kq); //So rows trong database
    $rows = 5;  //So rows muon hien thi
    if(isset($_GET['page'])&&$_GET['page']>0){
      $page = ($_GET['page']-1)*$rows;  //Vi tri record 
    }
    else {$page = 1;echo "<script>window.location.href='./index.php?url=thongke&page=1'</script>"; }
    
    $qr = "SELECT * FROM hoadon where TrangThai= 'Đã giao' and MaNCC='$mancc' limit $page,$rows";
    $result = mysqli_query($conn, $qr);
    ?>
    <h1 class="title">THỐNG KÊ</h1>
     <!-- Loc hoa don -->
    <div class="filter">
    <form method="post" action="<?php include("loc.php"); ?>">
            <table class="table-date">
                <tr>
                    <td> Từ ngày </td>
                    <td> <input type="date"  name="fromdate" id="fromdate"> </td>
                    <td> Đến ngày </td>
                    <td> <input  type="date" name="todate" id="todate"> </td>          
                 </tr>
            </table>         
        <br>
        <div class="button-filter">           
            <button  type="submit" name="filter" class="btn-filter">Lọc</button>
            <button  class="btn-filter" type="button" onclick="window.location.href='./index.php?url=thongke'">Huỷ lọc</button>          
         </div>
           </form>
    </div>
<!-- ------------------------------------------------------- -->

<table class="table table-bordered table-hover table-1">
  <thead class="table-success">
    <tr>
      <th scope="col" class="title-table" style="width: 3%">STT</th>
      <th scope="col" class="title-table" style="width: 7%">Mã hóa đơn</th>
      <th scope="col" class="title-table" style="width: 15%">Tên đăng nhập</th>
      <th scope="col" class="title-table" style="width: 10%">Ngày hóa đơn</th>
      <th scope="col" class="title-table" style="width: 10%">Thành tiền</th>
      <th scope="col" class="title-table" style="width: 10%">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php   
        $total=0;
        $quantity = 0;
        $count =0;
        if(mysqli_num_rows($result)>0){           
            while($row = mysqli_fetch_array($result)) { 
                $MaHD = $row['MaHD'];
                $count++;
                include("thanhtien.php");

                 if(mysqli_num_rows($result1)>0){
                    $tongtien = 0;
                    
                     while($row1 = mysqli_fetch_array($result1)) {
                 
                 $tongtien +=  $row1['SoLuongMua']*$row1['GiaGoc']-($row1['SoLuongMua']*$row1['GiaGoc']*$row1['TyLeKM'])/100;
                 $quantity += $row1['SoLuongMua'];
                }
                $total += $tongtien;  
    ?>
    <tr>
      <td style="font-weight: bold"><?php echo $count?></td>
      <td><?php echo $row['MaHD'];?></td>
      <td style="word-wrap:break-word"><?php echo $row['TenDangNhap'];?></td>
      <td><?php echo $row['NgayHD'];?></td>
      <td> <?php echo number_format($tongtien,"0",",",".")." VNĐ"; ?> </td>
      <td>
        <a href="./index.php?url=cthoadon&id=<?php echo $row['MaHD']?>&fc=5" class="btn btn-primary"><i class="far fa-eye"></i></a>
      </td>   
    </tr>
    <?php }}}else{?>
      <tr >
        <td colspan="6">Không có hóa đơn nào!</td>
      </tr>
      <?php }?>
  </tbody>
</table>

<?php if(ceil($num_rows / $rows)>1){?>
<nav aria-label="Page navigation example" style="margin-left:50%;">
  <ul class="pagination">
    <?php if(isset($_GET['page'])&& $_GET['page']>1){ ?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=thongke&page=<?php if(isset($_GET['page'])) echo $_GET['page']-1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php } ?>
    <?php $num_pages = ceil($num_rows / $rows);   //So pagination
          for($i=1;$i<=$num_pages;$i++) { 
    ?>
    <li class="page-item"><a class="page-link" href="./index.php?url=thongke&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
    <?php } if(isset($_GET['page'])&& $_GET['page']!=$num_pages){?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=thongke&page=<?php if(isset($_GET['page'])) echo $_GET['page']+1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>

<div class="statistics">
    <div class="statistics_total">
    <i class="fas fa-dollar-sign icon_currency"></i>
          <div class="currency">
              <span><?php echo number_format($total,"0",",","."); ?></span>
          </div>
          <div class="currency_title">
              <span><?php echo "VNĐ"; ?></span>
          </div>
    </div>
    <div class="statistics_bill">
    <i class="fas fa-shopping-cart icon_cart"></i>
          <div class="cart">
              <span><?php echo $count; ?></span>
          </div>
          <div class="cart_title">
              <span><?php echo "Đơn hàng"; ?></span>
          </div>
    </div>
    <div class="statistics_product">
    <i class="fas fa-air-freshener icon_product"></i>
          <div class="product">
              <span><?php echo $quantity; ?></span>
          </div>
          <div class="product_title">
              <span><?php echo "Sản phẩm"; ?></span>
          </div>
    </div>
</div>
<h1 class="title">SẢN PHẨM BÁN CHẠY</h1>
<table class="table table-bordered table-hover table-1">
  <thead class="table-success">
    <tr>
      <th scope="col" class="title-table" style="width: 3%">STT</th>
      <th scope="col" class="title-table" style="width: 7%">Mã sản phẩm</th>
      <th scope="col" class="title-table" style="width: 15%">Tên sản phẩm</th>
      <th scope="col" class="title-table" style="width: 10%">Số lượng</th>
    </tr>
  </thead>
  <tbody>
    <?php  
        $sql = "SELECT sp.MaSP,sp.TenSP,SUM(cthd.SoLuongMua) as SoLuong FROM hoadon hd,cthoadon cthd,sanpham sp where hd.mahd=cthd.MaHD and sp.masp=cthd.MaSP and hd.TrangThai= 'Đã giao' and cthd.MaSP=sp.MaSP and sp.MaNCC='$mancc' GROUP BY sp.MaSP,sp.TenSP 
        ORDER BY SoLuong DESC LIMIT 0,5"; 
        $result = mysqli_query($conn, $sql);
        $count =0;
        if(mysqli_num_rows($result)>0){           
            while($row = mysqli_fetch_array($result)) { 
              $count++;
    ?>
    <tr>
      <td style="font-weight: bold"><?php echo $count?></td>
      <td style="font-weight: bold"><?php echo $row['MaSP']?></td>
      <td style="font-weight: bold"><?php echo $row['TenSP']?></td>
      <td style="font-weight: bold"><?php echo $row['SoLuong']?></td>
    </tr>
    <?php }} ?>
  </tbody>
</table>
</body>
</html>