<?php include("./head.php") ?>
<!-- Tabs navs -->
<ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex3-tab-1"
      data-mdb-toggle="tab"
      href="#ex3-tabs-1"
      role="tab"
      aria-controls="ex3-tabs-1"
      aria-selected="true"
      >Thông tin cá nhân</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex3-tab-2"
      data-mdb-toggle="tab"
      href="#ex3-tabs-2"
      role="tab"
      aria-controls="ex3-tabs-2"
      aria-selected="false"
      >Đổi mật khẩu</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex3-tab-3"
      data-mdb-toggle="tab"
      href="#ex3-tabs-3"
      role="tab"
      aria-controls="ex3-tabs-3"
      aria-selected="false"
      >Lịch sử đơn hàng</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex2-content">
  <div
    class="tab-pane fade show active user"
    id="ex3-tabs-1"
    role="tabpanel"
    aria-labelledby="ex3-tab-1"
    >
  <table>
    <!-- TT TAI KHOAN -->
    <?php 
        if(isset($_SESSION["user"])) $user = $_SESSION["user"];
        $qr = "SELECT * FROM taikhoan where TenDangNhap='$user' and MaLoai='US'";
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
        <td class="title-cthd">Tên đăng nhập</td><td class="content-cthd"><?php echo $row['TenDangNhap']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Email</td><td class="content-cthd"><?php echo $row['Email'] ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Họ tên</td><td class="content-cthd"> <input type="text" id="name" value="<?php echo $row['HoTen'];?>"></td>
        </tr>
        <tr>
        <td class="title-cthd">Giới tính</td><td class="content-cthd">
            <select name="gender" class="gender">
                <option value="1" <?php if($row["GioiTinh"]==1) echo 'selected';?>>Nam</>
                <option value="0" <?php if($row["GioiTinh"]==0) echo 'selected';?>>Nữ</>
                </select></td>
        </tr>
        <tr>
        <td class="title-cthd">Số điện thoại</td><td class="content-cthd"><input type="text" id="phone" value="<?php echo $row['SoDienThoai'];?>" ></td>
        </tr>
        <tr>
        <td class="title-cthd">Địa chỉ</td><td class="content-cthd"><input type="text" id="address" value="<?php echo $row['DiaChi'];?>" ></td>
        </tr>
        <?php }}?>
    </table>
  </div>
  <div
    class="tab-pane fade user"
    id="ex3-tabs-2"
    role="tabpanel"
    aria-labelledby="ex3-tab-2"
  >
  <form action="./doimk.php" method="post" class="form_doimk">
        <table>
            <tr>
                <td>Mật khẩu cũ <b style="color:red">(*)</b> : </td>
                <td><input type="password" name="matkhaucu" id="matkhaucu" class="form-control" required></td>
            </tr>
            <tr>
                <td>Mật khẩu  <b style="color:red">(*)</b> : </td>
                <td><input type="password" name="matkhaumoi" id="matkhaumoi" class="form-control" required></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu mới <b style="color:red">(*)</b> : </td>
                <td><input type="password" name="rematkhaumoi" id="rematkhaumoi" class="form-control" required></td>
            </tr>
            <tr>
                <td colspan="2"><p id="error"></p></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-doimk">Cập nhật</button>
                </td>
            </tr>
        </table>
    </form>
  </div>
  <div
    class="tab-pane fade"
    id="ex3-tabs-3"
    role="tabpanel"
    aria-labelledby="ex3-tab-3"
  >
  <select name="bill" class="bill">
                <option selected>--- Chọn trạng thái ---</>
                <option value="Chờ xét duyệt">Chờ xét duyệt</>
                <option value="Đang giao" >Đang giao</>
                <option value="Đã giao" >Đã giao</>
                <option value="Đã hủy" >Đã hủy</>
    </select></td> 
  <div id="bill"></div>     
  <div id="view"></div>          
  </div>
</div>
<?php 
  if(isset($_GET["rs"])){
    switch($_GET["rs"]){
      case "1": echo "<script>alert('Hủy thành công')</script>";break;
      case "2": echo "<script>alert('Cập nhật thành công')</script>";break;
      default: return 0;
    }
  }
?>
<!-- Tabs content -->

<?php include("./footer.php") ?>