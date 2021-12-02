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
        var title=document.querySelector('.title').innerText="Quản Lý Sản Phẩm"
    </script>
    

<table class="table table-bordered" style="text-align:center;margin-left:50px">
<a type="button" class="btn-button1" href="./index.php?url=add"> <i class="fas fa-plus-circle" id='icon-icon'></i></a>
  <thead class="table-success">
    <tr>
      <th scope="col" class="title-table" style="width: 1%">STT</th>
      <th scope="col" class="title-table" style="width: 2%">Mã sản phẩm</th>
      <th scope="col" class="title-table" style="width: 3%">Tên sản phẩm</th>
      <th scope="col" class="title-table" style="width: 3%">Đơn giá</th>
      <th scope="col" class="title-table" style="width: 3%">Hình ảnh</th>
      <th scope="col" class="title-table" style="width: 2%">Mã danh mục</th>
      <th scope="col" class="title-table" style="width: 2%">Trạng thái</th>
      <th scope="col" class="title-table" style="width: 2%">Số Lượng</th>
      <div>
          <th scope="col" class="title-table" style="width: 4%">Chức năng</th>
      </div>
    </tr>
  </thead>
  <tbody>
      <?php
      //Xu ly Pagination
      $sql = "SELECT * FROM sanpham";
      $kq = mysqli_query($conn,$sql);
      $num_rows = mysqli_num_rows($kq); //So rows trong database
      $rows = 5;  //So rows muon hien thi
      if(isset($_GET['page'])&&$_GET['page']>0){
        $page = ($_GET['page']-1)*$rows;  //Vi tri record 
      }
      else {$page = 1;echo "<script>window.location.href='./index.php?url=qlsanpham&page=1'</script>"; }
      
      $sql="SELECT sp.MaSP,sp.MaNCC,sp.TenSP,sp.DonGia,sp.HinhAnh,sp.MaDM,sp.TrangThai,nx.SoLuongNhap FROM sanpham as sp,nhapxuat as nx,nhacungcap as ncc where sp.MaSP=nx.MaSP and nx.GiaXuat = sp.DonGia and sp.MaNCC=ncc.MaNCC limit $page,$rows";
      
      $result = mysqli_query($conn,$sql);
      // $sql_price="SELECT * FROM  nhapxuat INNER JOIN sanpham on nhapxuat.GiaXuat=sanpham.DonGia";
      // $query_price=mysqli_query($conn, $sql_price);
      // $row_price=mysqli_fetch_assoc($query_price);
     
      if(mysqli_num_rows($result)>0){
        $count=0;
        while($row=mysqli_fetch_array($result)){
            $count++;
      ?>
    
    <tr>
    
      <th scope="row"><?php echo $count ?></th>
      <td><?php echo $row['MaSP'] ?></td>
      <td style="word-wrap:break-word"><?php echo $row['TenSP'] ?></td>
      <td><?php echo number_format($row['DonGia'],0,",",".")." VNĐ"; ?></td>
      <td><img style="background-image: none;" class="image" src="./assets/images/images_product/<?php echo $row['HinhAnh'] ?>"></td>
      <td><?php echo $row['MaDM'] ?></td>
      <td><?php if($row['TrangThai']==1) echo "Đang hiển thị";
        else echo "Chưa hiển thị"?></td>
      <td><?php echo $row["SoLuongNhap"] ?></td>
      <div>
      <td>
              <a type="button" class="btn-button2" href="./index.php?url=view&id=<?php echo $row['MaSP']; ?>"> <i class="far fa-eye" id='icon'></i></button>
              <a type="button" class="btn-button4" href="./index.php?url=edit&id=<?php echo $row['MaSP']; ?>"> <i class="fas fa-edit" id='icon'></i></button>
             
              <a onclick="return Delete ('<?php echo $row['TenSP']; ?>')"  type="button" class="btn-button3" href="./index.php?url=delete&id=<?php echo $row['MaSP']; ?>"> <i class="fas fa-trash-alt" id='icon'></i></button>
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
      <a class="page-link" href="./index.php?url=qlsanpham&page=<?php if(isset($_GET['page'])) echo $_GET['page']-1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php } ?>
    <?php $num_pages = ceil($num_rows / $rows);   //So pagination
          for($i=1;$i<=$num_pages;$i++) { 
    ?>
    <li class="page-item"><a class="page-link" href="./index.php?url=qlsanpham&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
    <?php } if(isset($_GET['page'])&& $_GET['page']!=$num_pages){?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=qlsanpham&page=<?php if(isset($_GET['page'])) echo $_GET['page']+1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>
<?php if(isset($_GET['kq'])&&$_GET['kq']==1){?>
  <script>swal("","Thêm thành công","success")</script><?php }
  else if(isset($_GET['kq'])&&$_GET['kq']==-1){?>     
  <script>swal("","Thêm thất bại",'error')</script>     <?php }
?>
  <?php if(isset($_GET['kq1'])&&$_GET['kq1']==1){?>
  <script>swal("","Sửa thành công","success")</script><?php }?>
  <?php if(isset($_GET['kq'])&&$_GET['kq']==2){?>
  <script>swal("","Xóa thành công","success")</script><?php }?>
</body>
</html>
