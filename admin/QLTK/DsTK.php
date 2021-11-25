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
    <h1 class="title">DANH SÁCH TÀI KHOẢN</h1>
    <table class="table table-hover table-qltk">
        <tr class="table-success">
            <th style="width: 2%">STT</th>
            <th style="width: 9%">Tên đăng nhập</th>
            <th style="width: 9%">Email</th>
            <th style="width: 5%">Họ tên</th>
            <th style="width: 2%">Giới tính</th>
            <th style="width: 2%">Loại</th>
            <th style="width: 2%">Trạng thái</th>
            <th style="width: 8%">Xử lý</th>
        </tr>

        <?php
        include("../admin/connect.php");
    //Xu ly Pagination
      $sql = "SELECT * FROM taikhoan where MaLoai!='NCC'";
      $kq = mysqli_query($conn,$sql);
      $num_rows = mysqli_num_rows($kq); //So rows trong database
      $rows = 5;  //So rows muon hien thi
      if(isset($_GET['page'])&&$_GET['page']>0){
        $page = ($_GET['page']-1)*$rows;  //Vi tri record 
      }
      else {$page = 1;echo "<script>window.location.href='./index.php?url=QlTK&page=1'</script>"; }

        $sql = "select * from taikhoan where MaLoai!='NCC' limit $page,$rows";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $count++;
        ?>
                <tr>
                    <td><?php echo $count ?></td>
                    <td style="word-wrap:break-word"><?php echo $row["TenDangNhap"] ?></td>
                    <td style="word-wrap:break-word"><?php echo $row["Email"] ?></td>
                    <td style="word-wrap:break-word"><?php echo $row["HoTen"] ?></td>
                    <td><?php if ($row["GioiTinh"] == 0) echo "Nữ";
                        else echo "Nam" ?></td>
                    <td><?php if ($row["MaLoai"] == "AD") echo "Admin";
                        else echo "User" ?></td>
                    <td><?php echo ($row["TrangThai"] == 1) ?  "Mở" : "Khóa" ?></td>
                    <td>
                        <a href="./index.php?url=suatk&id=<?php echo $row["TenDangNhap"]; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="./index.php?url=doimk&id=<?php echo $row["TenDangNhap"]; ?>" class="btn btn-primary"><i class="fas fa-key"></i></a>
                        <?php if ($row["MaLoai"] != "AD"){ ?>
                        <a href="./index.php?url=xoatk&id=<?php echo $row["TenDangNhap"]; ?>" class="btn btn-danger" onclick="return xoa('<?php echo $row['TenDangNhap']; ?>')"><i class="fas fa-times"></i></a>
                            <?php }?>
                    </td>
                </tr>
        <?php }
        }  ?>

        <td colspan="8" align="center">
            <a class="btn btn-secondary btn-qltk" type="button" href="./index.php?url=themtk">Thêm mới </a>
        </td>
    </table>
<?php if(ceil($num_rows / $rows)>1){?>
    <nav aria-label="Page navigation example" style="margin-left:50%;">
  <ul class="pagination">
    <?php if(isset($_GET['page'])&& $_GET['page']>1){ ?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=QlTK&page=<?php if(isset($_GET['page'])) echo $_GET['page']-1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php } ?>
    <?php $num_pages = ceil($num_rows / $rows);   //So pagination
          for($i=1;$i<=$num_pages;$i++) { 
    ?>
    <li class="page-item"><a class="page-link" href="./index.php?url=QlTK&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
    <?php } if(isset($_GET['page'])&& $_GET['page']!=$num_pages){?>
    <li class="page-item">
      <a class="page-link" href="./index.php?url=QlTK&page=<?php if(isset($_GET['page'])) echo $_GET['page']+1 ?>" aria-label="Next">
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

<script>

    function xoa(name) {
        return confirm("Bạn có muốn xóa tài khoản : " + name + " ?");
    }
</script>

<?php if (isset($_GET['kq']) && $_GET['kq'] == 1) { ?>
    <script>
        swal("", "Thêm thành công", "success")
    </script>
<?php } ?>

<?php if (isset($_GET['kq']) && $_GET['kq'] == 2) { ?>
    <script>
        swal("", "Cập nhật thành công", "success")
    </script>
<?php } ?>

<?php if (isset($_GET['kq']) && $_GET['kq'] == 3) { ?>
    <script>
        swal("", "Xóa thành công", "success")
    </script>
<?php } ?>

<?php if (isset($_GET['kq']) && $_GET['kq'] == 4) { ?>
    <script>
        swal("", "Đổi mật khẩu thành công", "success")
    </script>
<?php } ?>