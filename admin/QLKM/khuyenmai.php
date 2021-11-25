<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/QLKM/khuyenmai.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <title>Quản lý khuyến mãi</title>
</head>
<body>
    <?php include './connect.php' ?>
    <h1 class="title">Thông tin đợt khuyến mãi</h1>
    <a href="./index.php?url=themdotkm" type="button" class="btn btn-success btn-km"><i class="fas fa-plus-circle"></i> Thêm đợt khuyến mãi</a>
    <table class="table table-bordered table-hover table-1">
  <thead class="table-success">
    <tr>
      <th scope="col" class="title-table" style="width: 3%">STT</th>
      <th scope="col" class="title-table" style="width: 3%">Mã KM</th>
      <th scope="col" class="title-table" style="width: 15%">Tên khuyến mãi</th>
      <th scope="col" class="title-table" style="width: 8%">Từ ngày</th>
      <th scope="col" class="title-table" style="width: 8%">Đến ngày</th>
      <th scope="col" class="title-table" style="width: 15%">Trạng Thái</th>
      <th scope="col" class="title-table" style="width: 15%">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //Xu ly Pagination
        $sql = "SELECT * FROM khuyenmai";
        $kq = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($kq); //So rows trong database
        $rows = 5;  //So rows muon hien thi
        if(isset($_GET['page'])&&$_GET['page']>0){
          $page = ($_GET['page']-1)*$rows;  //Vi tri record 
        }
        else {$page = 1;echo "<script>window.location.href='./index.php?url=khuyenmai&page=1'</script>"; }
        
        $qr = "SELECT * FROM khuyenmai limit $page,$rows";
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            $count =0;
            while($row = mysqli_fetch_array($result)) {   
                $count++; 
    ?>
    <tr>
      <td style="font-weight: bold"><?php echo $count?></td>
      <td><?php echo $row['MaKM'];?></td>
      <td style="word-wrap:break-word"><?php echo $row['TenKM'];?></td>
      <td><?php echo $row['TuNgay'];?></td>
      <td><?php echo $row['DenNgay'];?></td>
      <?php if($row['TrangThai']=="Chưa khuyến mãi"){ ?>
      <td><div class="status st1"><?php echo $row['TrangThai'];?></div></td><?php }?>
      <?php if($row['TrangThai']=="Đang khuyến mãi"){ ?>
      <td><div class="status st2"><?php echo $row['TrangThai'];?></div></td><?php }?>
      <?php if($row['TrangThai']=="Hết khuyến mãi"){ ?>
      <td><div class="status st3"><?php echo $row['TrangThai'];?></div></td><?php }?>
      <td>
        <a href="./index.php?url=ctkhuyenmai&id=<?php echo $row['MaKM']?>" class="btn btn-primary"><i class="far fa-eye"></i></a>
        <a href="./index.php?url=themspkm&id=<?php echo $row['MaKM']?>" class="btn btn-success"><i class="fas fa-plus-circle"></i></a>
        <a href="./index.php?url=suakm&id=<?php echo $row['MaKM']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
        <a href="./index.php?url=xoakm&id=<?php echo $row['MaKM'];?>&function=1" onclick="return confirm('Bạn có muốn xóa đợt khuyến mãi này?')" class="btn btn-danger"><i class="fas fa-times"></i></a>
        <?php if($row['TrangThai']=="Đang khuyến mãi"){?>
          <a href="./index.php?url=khoakm&id=<?php echo $row['MaKM']?>" class="btn btn-primary" onclick="return confirm('Bạn có muốn khóa đợt khuyến mãi này?')"><i class="fas fa-key"></i></a>
          <?php }?>
      </td>   
    </tr>
    <?php }}else{?>
      <tr>
        <td colspan="7">Hiện chưa có đợt khuyến mãi!</td>
      </tr>
      <?php }?>
  </tbody>
</table>
<?php if(ceil($num_rows / $rows)>1){?>
<nav aria-label="Page navigation example" style="margin-left:50%;">
  <ul class="pagination">
    <?php if(isset($_GET['page'])&& $_GET['page']>1){ ?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=khuyenmai&page=<?php if(isset($_GET['page'])) echo $_GET['page']-1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php } ?>
    <?php $num_pages = ceil($num_rows / $rows);   //So pagination
          for($i=1;$i<=$num_pages;$i++) { 
    ?>
    <li class="page-item"><a class="page-link" href="./index.php?url=khuyenmai&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
    <?php } if(isset($_GET['page'])&& $_GET['page']!=$num_pages){?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=khuyenmai&page=<?php if(isset($_GET['page'])) echo $_GET['page']+1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>
<!-- Thong bao  -->
<?php if(isset($_GET['kq'])&&$_GET['kq']==1) {?>
  <script>swal("","Thêm thành công","success")</script><?php } ?>
  <?php if(isset($_GET['kq'])&&$_GET['kq']==2) {?>
  <script>swal("","Xóa thành công","success")</script><?php } ?>
  <?php if(isset($_GET['kq'])&&$_GET['kq']==3) {?>
  <script>swal("","Sửa thành công","success")</script><?php } ?>
</body>
</html>