<script src="../User/assets/js/modal.js"></script>
<div class="cthoadon_modal">
    <table class="cthoadon">
        <h2 style="text-align:center;margin:20px 0px;color:#046935">CHI TIẾT HÓA ĐƠN</h2>
    <!-- TT HOA DON -->
    <?php 
        include '../admin/connect.php'; 
        $qr = "SELECT * FROM hoadon where MaHD='".$_POST['id']."'";
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td class="title-cthd">Hóa đơn</td><td class="content-cthd"><?php echo $row['MaHD']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Ngày đặt hàng</td><td class="content-cthd"><?php echo $row['NgayHD'] ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Email</td><td class="content-cthd"><?php echo $row['TenDangNhap']; ?></td>
        </tr>
        <tr>
        <td class="title-cthd">Ghi chú</td><td class="content-cthd"><?php echo ($row['GhiChu']=="") ? "Không": $row['GhiChu']; ?></td>
        </tr>
        <?php }}?>
    <!-- TT TAIKHOAN -->
    <?php 
        // $qr = "SELECT TenDangNhap FROM hoadon where MaHD='".$_POST['id']."'";
        // $result = mysqli_query($conn, $qr);
        // if(mysqli_num_rows($result)>0){
        //     while($row = mysqli_fetch_array($result))
        $qr1 = "SELECT * FROM hoadon where MaHD='".$_POST['id']."'";
        $result1 = mysqli_query($conn, $qr1);
        if(mysqli_num_rows($result1)>0){
            while($row1 = mysqli_fetch_array($result1)){
    ?>
        <tr>
            <td class="title-cthd">Họ tên người nhận</td><td class="content-cthd"><?php echo $row1['HoTenNN']; ?></td>
        </tr>
        <tr>
            <td class="title-cthd">Số điện thoại</td><td class="content-cthd"><?php echo $row1['SoDienThoaiNN']; ?></td>
        </tr>
        <tr>
            <td class="title-cthd">Địa chỉ</td><td class="content-cthd"><?php echo $row1['DiaChiNN']; ?></td>
        </tr>
    <?php }}?>
    <!-- San pham trong hoa don -->
    </table>
    <br />
    <table class="table table-bordered table-hover table_cthoadon">
  <thead class="table-success">
    <tr>
      <th scope="col" class="title-table">STT</th>
      <th scope="col" class="title-table">Tên sản phẩm</th>
      <th scope="col" class="title-table">Đơn giá</th>
      <th scope="col" class="title-table">Tỷ lệ KM</th>
      <th scope="col" class="title-table">Số lượng</th>
      <th scope="col" class="title-table">Thành tiền</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $qr = "SELECT ct.MaSP,TenSP,HinhAnh,ct.GiaGoc,ct.TyLeKM,ct.SoLuongMua FROM cthoadon ct, sanpham sp where ct.MaSP=sp.MaSP and MaHD='".$_POST['id']."'";
        $result = mysqli_query($conn, $qr);
        if(mysqli_num_rows($result)>0){
            $count =0;
            $tongtien = 0;
            while($row = mysqli_fetch_array($result)) {   
                $count++;
                $tongtien +=  $row['SoLuongMua']*$row['GiaGoc']-($row['SoLuongMua']*$row['GiaGoc']*$row['TyLeKM'])/100;
                
    ?>
      <tr class="status">
      <td style="font-weight: bold"><?php echo $count?></td>
      <td><?php echo $row['TenSP'];?></td>
      <td><?php echo number_format($row['GiaGoc'],0,",",".")."&#8363;";?></td>
      <td><?php echo $row['TyLeKM']." %";?></td>
      <td><?php echo $row['SoLuongMua'];?></td>
      <td><?php echo number_format($row['SoLuongMua']*$row['GiaGoc']-($row['SoLuongMua']*$row['GiaGoc']*$row['TyLeKM'])/100,0,",",".")."&#8363;";?></td>  
    </tr>
    <?php }}?>
  </tbody>
    <tr class="status">
           <td class="title-cthd" colspan="5" style="text-align: right;padding-right:5%;font-size: 20px;">Tổng tiền</td><td class="content-cthd" style="font-weight: bold  ;color:red;font-size: 20px;"><?php if(isset($tongtien)&&$tongtien!=null) echo number_format($tongtien,0,",",".")."&#8363;"; ?></td>
    </tr>
</table>
</div>