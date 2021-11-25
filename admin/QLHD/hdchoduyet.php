<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/QLHD/hdchoduyet.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <title>Hóa đơn chờ duyệt</title>
</head>
<body>
    <?php include './connect.php'; 
    if(isset($_SESSION["MaNCC"])) $mancc = $_SESSION["MaNCC"];
      //Xu ly Pagination
        $sql = "SELECT * FROM hoadon WHERE MaNCC='$mancc' AND TrangThai='Chờ xét duyệt'";                                                             //SELECT hd.MaHD,hd.TenDangNhap,hd.NgayHD,hd.TrangThai,cthd.MaSP FROM hoadon hd,cthoadon cthd,sanpham sp where hd.mahd=cthd.MaHD and sp.masp=cthd.MaSP and hd.TrangThai= 'Chờ xét duyệt' and cthd.MaSP=sp.MaSP and sp.MaNCC='mancc'
        $kq = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($kq); //So rows trong database
        $rows = 5;  //So rows muon hien thi
        if(isset($_GET['page'])&&$_GET['page']>0){
          $page = ($_GET['page']-1)*$rows;  //Vi tri record 
        }
        else {$page = 1;echo "<script>window.location.href='./index.php?url=hdchoduyet&page=1'</script>"; }
        

     $qr = "SELECT * FROM hoadon WHERE MaNCC='$mancc' AND TrangThai='Chờ xét duyệt' limit $page,$rows"; 
     $result = mysqli_query($conn, $qr);
    ?>
    <h1 class="title">Hóa đơn chờ xét duyệt</h1>
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
            <button  class="btn-filter" type="button" onclick="window.location.href='./index.php?url=hdchoduyet'">Huỷ lọc</button>          
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
      <th scope="col" class="title-table" style="width: 10%">Trạng Thái</th>
      <th scope="col" class="title-table" style="width: 10%">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php   
        if(mysqli_num_rows($result)>0){
            $count =0;
            while($row = mysqli_fetch_array($result)) {   
                $count++; 
    ?>
    <tr>
      <td style="font-weight: bold"><?php echo $count?></td>
      <td><?php echo $row['MaHD'];?></td>
      <td style="word-wrap:break-word"><?php echo $row['TenDangNhap'];?></td>
      <td><?php echo $row['NgayHD'];?></td>
      <td><div class="status st1"><?php echo $row['TrangThai'];?></div></td>
      <td>
        <a href="./index.php?url=cthoadon&id=<?php echo $row['MaHD']?>&fc=1" class="btn btn-primary"><i class="far fa-eye"></i></a>
        <a href="./index.php?url=checkhd&id=<?php echo $row['MaHD']?>&function=1" onclick="return confirm('Bạn có muốn chuyển trạng thái đơn sang đang giao không?')" class="btn btn-success"><i class="far fa-check-circle"></i></a>
        <a type="./index.php?url=checkhd&id=<?php echo $row['MaHD']?>&function=2" onclick="return confirm('Bạn có muốn hủy đơn hàng này?')" class="btn btn-danger"><i class="fas fa-times"></i></a>
      </td>   
    </tr>
    <?php }}else{?>
      <tr >
        <td colspan="6">Không có hóa đơn nào chờ duyệt!</td>
      </tr>
      <?php }?>
  </tbody>
</table>

<?php if(ceil($num_rows / $rows)>1){?>
<nav aria-label="Page navigation example" style="margin-left:50%;">
  <ul class="pagination">
    <?php if(isset($_GET['page'])&& $_GET['page']>1){ ?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=hdchoduyet&page=<?php if(isset($_GET['page'])) echo $_GET['page']-1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php } ?>
    <?php $num_pages = ceil($num_rows / $rows);   //So pagination
          for($i=1;$i<=$num_pages;$i++) { 
    ?>
    <li class="page-item"><a class="page-link" href="./index.php?url=hdchoduyet&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
    <?php } if(isset($_GET['page'])&& $_GET['page']!=$num_pages){?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=hdchoduyet&page=<?php if(isset($_GET['page'])) echo $_GET['page']+1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>
<!-- Thong bao  -->
  <?php if(isset($_GET['kq'])&&$_GET['kq']==5) {?>
  <script>swal("","Khôi phục thành công","success")</script><?php } ?>
</body>
</html>