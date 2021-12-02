<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/c52f7154f4.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="./assets/css/QLSP/QLSP.css"/>
      <link rel="stylesheet" href="./assets/css/index.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="./assets/js/QLSP_js/delete_QLSP.js"></script>

    <title>Document</title>
</head>
<body>
    <?php include "./connect.php";
  if(isset($_SESSION['MaNCC'])) $prd_supplier=$_SESSION['MaNCC'];
  ?>
    <h1 class="title"></h1>
    <script>
        var title=document.querySelector('.title').innerText="Quản Lý Khách Hàng "
    </script>
    

<table class="table table-bordered" style="text-align:center;margin-left:50px">
  <thead class="table-success">
    <tr style="text-align:center">
      <th scope="col" class="title-table" style="width: 2%;">STT</th>
      <th scope="col" class="title-table" style="width: 5%;  word-wrap: break-word">Email</th>
      <th scope="col" class="title-table" style="width: 3%">Họ tên</th>
      <th scope="col" class="title-table" style="width: 3%">Giới tính</th>
      <th scope="col" class="title-table" style="width: 3%">Số điện thoại</th>
      <th scope="col" class="title-table" style="width: 2%">Địa chỉ</th>
      <th scope="col" class="title-table" style="width: 2%">Trạng thái</th>
      <th scope="col" class="title-table" style="width: 2%">Mã Loại</th>

      <div>
          <th scope="col" class="title-table" style="width: 4%">Chức năng</th>
      </div>
    </tr>
  </thead>
  <tbody>
      <?php
      //Xu ly Pagination
      $sql = "SELECT * FROM taikhoan";
      $kq = mysqli_query($conn,$sql);
      $num_rows = mysqli_num_rows($kq); //So rows trong database
      $rows = 5;  //So rows muon hien thi
      if(isset($_GET['page'])&&$_GET['page']>0){
        $page = ($_GET['page']-1)*$rows;  //Vi tri record 
      }
      else {$page = 1;echo "<script>window.location.href='./index.php?url=dskh&page=1'</script>"; }
      
      $sql="SELECT  DISTINCT taikhoan.TenDangNhap,taikhoan.MatKhau,taikhoan.Email ,taikhoan.SoDienThoai,taikhoan.TrangThai,taikhoan.HoTen,
      taikhoan.DiaChi ,taikhoan.MaLoai, taikhoan.GioiTinh FROM taikhoan where MaLoai='NCC' limit $page,$rows";
      
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        $count=0;
        while($row=mysqli_fetch_array($result)){
            $count++;
      ?>
    
    <tr>
    
      <th scope="row" style="text-align: center;"><?php echo $count ?></th>
      <td><?php echo $row['Email'] ?></td>
      <td style="word-wrap:break-word"><?php echo $row['HoTen'] ?></td>
      <td><?php if($row['GioiTinh']==1) echo "Nam";
        else echo "Nữ"?></td>
      <td style="word-wrap:break-word"><?php echo $row['SoDienThoai'] ?></td>
      <td style="word-wrap:break-word"><?php echo $row['DiaChi'] ?></td>
      <td><?php if($row['TrangThai']==1) echo "Đang hiển thị";
        else echo "Chưa hiển thị"?></td>
      <td style="word-wrap:break-word"><?php echo $row['MaLoai'] ?></td>
      <div>
      <td>
             
              <a onclick="return Delete_KH ('<?php echo $row['HoTen']; ?>')"  type="button" class="btn btn-danger btn"href=""> <i class="fas fa-trash-alt" id='icon'></i></button>
              <!--  -->
            </td>
        </div>
    </tr>
    <?php }}?>
  </tbody>
</table>
<?php if(ceil($num_rows / $rows)>1){?>
<nav aria-label="Page navigation example" style="margin-left:50%;">
  <ul class="pagination">
    <?php if(isset($_GET['page'])&& $_GET['page']>1){ ?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=dskh&page=<?php if(isset($_GET['page'])) echo $_GET['page']-1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php } ?>
    <?php $num_pages = ceil($num_rows / $rows);   //So pagination
          for($i=1;$i<=$num_pages;$i++) { 
    ?>
    <li class="page-item"><a class="page-link" href="./index.php?url=dskh&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
    <?php } if(isset($_GET['page'])&& $_GET['page']!=$num_pages){?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=dskh&page=<?php if(isset($_GET['page'])) echo $_GET['page']+1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>
  <?php if(isset($_GET['kq'])&&$_GET['kq']==2){?>
  <script>swal("","Xóa thành công","success")</script><?php }?>
</body>
</html>
