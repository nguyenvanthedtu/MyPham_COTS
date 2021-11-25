<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link  rel="stylesheet" href="./assets/css/QLTK/qltk.css"/>
</head>

<body>
    <div class="container-qltk">
    <h1 class="title">DANH SÁCH KHÁCH HÀNG</h1>
    <table class="table table-hover table-qltk">
        <tr class="table-success">
            <th style="width: 2%">STT</th>
            <th style="width: 9%">Email</th>
            <th style="width: 5%">Họ tên</th>
            <th style="width: 2%">Giới tính</th>
            <th style="width: 2%">Số điện thoại</th>
            <th style="width: 2%">Địa chỉ</th>
        </tr>

        <?php
        include("../admin/connect.php");
        if(isset($_SESSION["MaNCC"])) $mancc = $_SESSION["MaNCC"];
    //Xu ly Pagination
      $sql = "SELECT DISTINCT tk.Email,tk.HoTen,tk.GioiTinh,tk.SoDienThoai,tk.DiaChi FROM taikhoan tk, hoadon hd where tk.TenDangNhap=hd.TenDangNhap and hd.MaNCC='$mancc'";
      $kq = mysqli_query($conn,$sql);
      $num_rows = mysqli_num_rows($kq); //So rows trong database
      $rows = 5;  //So rows muon hien thi
      if(isset($_GET['page'])&&$_GET['page']>0){
        $page = ($_GET['page']-1)*$rows;  //Vi tri record 
      }
      else {$page = 1;echo "<script>window.location.href='./index.php?url=qlkh&page=1'</script>"; }

        $sql = "SELECT DISTINCT tk.Email,tk.HoTen,tk.GioiTinh,tk.SoDienThoai,tk.DiaChi FROM taikhoan tk, hoadon hd where tk.TenDangNhap=hd.TenDangNhap and hd.MaNCC='$mancc' limit $page,$rows";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $count++;
        ?>
                <tr>
                    <td><?php echo $count ?></td>
                    
                    <td style="word-wrap:break-word"><?php echo $row["Email"] ?></td>
                    <td style="word-wrap:break-word"><?php echo $row["HoTen"] ?></td>
                    <td><?php if ($row["GioiTinh"] == 0) echo "Nữ";
                        else echo "Nam" ?></td>
                    <td style="word-wrap:break-word"><?php echo $row["SoDienThoai"] ?></td>
                    <td style="word-wrap:break-word"><?php echo $row["DiaChi"] ?></td>
                
                </tr>
        <?php }
        }  ?>

    </table>
<?php if(ceil($num_rows / $rows)>1){?>
    <nav aria-label="Page navigation example" style="margin-left:50%;">
  <ul class="pagination">
    <?php if(isset($_GET['page'])&& $_GET['page']>1){ ?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=qlkh&page=<?php if(isset($_GET['page'])) echo $_GET['page']-1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php } ?>
    <?php $num_pages = ceil($num_rows / $rows);   //So pagination
          for($i=1;$i<=$num_pages;$i++) { 
    ?>
    <li class="page-item"><a class="page-link" href="./index.php?url=qlkh&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
    <?php } if(isset($_GET['page'])&& $_GET['page']!=$num_pages){?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=qlkh&page=<?php if(isset($_GET['page'])) echo $_GET['page']+1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>
    </div>
</body>

</html>
