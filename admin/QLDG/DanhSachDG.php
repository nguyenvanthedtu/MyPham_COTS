<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php      
            include("connect.php");
            if(isset($_SESSION["MaNCC"])) $mancc = $_SESSION["MaNCC"];
                $sql_select="SELECT * FROM danhgia dg,sanpham sp WHERE dg.MaSP=sp.MaSP and sp.MaNCC='$mancc'";
                $result= mysqli_query($conn,$sql_select);
                ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="./assets/css/QLDG/cssQLDG.css" rel="stylesheet" />
    </head>
    <body>
        <div class="content-comment">
      <h1 class="title">QUẢN LÝ ĐÁNH GIÁ</h1>
    <div class="danhgia "  >
        <div class="danhgia_content"  >
            <form method="post"  action="<?php include("loc.php"); ?>">
            <table class="table-date">
                <tr>
                    <td> Từ ngày </td>
                    <td> <input type="date"  name="fromdate" id="fromdate"> </td>
                    <td> Đến ngày </td>
                    <td> <input  type="date" name="today" id="todate"> </td>          
                 </tr>
            </table>           
        </div>
        <br>
        <div class="btn">           
            <button  type="submit" name="sbm" class="btn-danhgia" onclick="myFunction()">Lọc</button>
            <button  class="btn-danhgia" type="button" onclick="dieu_huong()">Huỷ lọc</button>          
         </div>
           </form>
        <br>
        <table class="fl-table">
        <thead>
        <tr>
            <th>Mã ĐG</th>
            <th>Mã SP</th>
            <th>Tên đăng nhập</th>
            <th>Số sao</th>
            <th>Ngày đánh giá</th>
            <th>Trạng thái</th>
            <th>Chức năng</th>      
        </tr>
        </thead>
        <tbody>             
            <?php       
            $stt=0;
             if(mysqli_num_rows( $result)>0){
                 while($row= mysqli_fetch_assoc($result)){
                      ?>
            <tr>
            <td><?= ++$stt ?></td>
           <td><?= $row['MaSP'] ?></td>
           <td style="word-wrap:break-word"><?= $row['TenDangNhap'] ?></td>
           <td><?= $row['SoSao'] ?></td>
            
            <td><?= $row['NgayDG'] ?></td>
            <td><?php echo ($row["TrangThai"] == 1) ?  "Hiện" : "Ẩn" ?></td>
            <td>
                    <a href="./index.php?url=review&id=<?php echo $row['MaDG']; ?> "  class="view-comment">Xem</a>
                    <?php if ($row["TrangThai"]== 0) {?>
                    <a  href="./index.php?url=confirm&id=<?php echo $row['MaDG']; ?>" onclick="return confirm('Bạn có muốn duyệt đánh giá này không?')" class="view-comment confirm">Duyệt</a>
                    <?php }?>
                    <a onclick="return confirm('Bạn có muốn xóa đánh giá này không?')" href="./index.php?url=xoadg&id=<?php echo $row['MaDG']; ?>" class="view-comment delete">Xóa</a>
            </td>
        </tr>
        <?php }}else{?>
      <tr>
        <td colspan="7">Hiện chưa có đánh giá!</td>
      </tr>
      <?php }?>
        </tbody>
    </table>   
        </div>
        </div>
    <script>
        function dieu_huong(){
            location.assign("./index.php?url=qldg");
            }
    </script>
    <?php if(isset($_GET['kq'])&&$_GET['kq']==1) {?>
  <script>swal("","Duyệt thành công","success")</script><?php } ?>
  <?php if(isset($_GET['kq'])&&$_GET['kq']==2) {?>
  <script>swal("","Xóa thành công","success")</script><?php } ?>
</body>
</html>
