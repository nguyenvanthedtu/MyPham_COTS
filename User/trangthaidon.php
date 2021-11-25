
    <?php session_start(); ?>
    <?php include '../admin/connect.php'; 
    $tendangnhap = $_SESSION["user"];  
    $status = $_POST['status'];   
     $qr = "SELECT * FROM hoadon where TrangThai = '$status' and TenDangNhap= '$tendangnhap'";
     $result = mysqli_query($conn, $qr);
    ?>
 
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
    <tr class="status">
      <td style="font-weight: bold"><?php echo $count?></td>
      <td><?php echo $row['MaHD'];?></td>
      <td style="word-wrap:break-word"><?php echo $row['TenDangNhap'];?></td>
      <td><?php echo $row['NgayHD'];?></td>
      <td><div class="status st1"><?php echo $row['TrangThai'];?></div></td>
      <td>
      <a data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['MaHD']; ?>" id="getID" class="btn btn-info"><i class="far fa-eye"></i></a>
        <?php if($row["TrangThai"]=="Chờ xét duyệt") { ?>
        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn hủy đơn này?')" href="./delete.php?id=<?php echo $row["MaHD"]?>"><i class="fas fa-times"></i></a>
       <?php } ?>
      </td>   
    </tr>
    <?php }}else{?>
      <tr class="status">
        <td colspan="6">Không có hóa đơn nào chờ duyệt!</td>
      </tr>
      <?php }?>
  </tbody>
</table>
<script src="../User/assets/js/modal.js"></script>

  

