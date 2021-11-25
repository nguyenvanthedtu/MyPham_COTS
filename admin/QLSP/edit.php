<link rel="stylesheet" href="./assets/css/QLSP/QLSP_add.css"/>
<script src="./assets/js/QLSP_js/add_QLSP.js"></script>
<script src="./assets/js/QLSP_js/edit.js"></script>
<?php include "./connect.php";
  if(isset($_SESSION['MaNCC'])) $prd_supplier=$_SESSION['MaNCC'];
  $id=$_GET["id"];
  $sql_category="SELECT * FROM danhmuc  ";
  $query_category=mysqli_query($conn,$sql_category);
  $sql_update="SELECT sp.MaSP,sp.MaNCC,sp.TenSP,nx.GiaNhap,nx.GiaXuat,sp.HinhAnh,sp.MaDM,sp.TrangThai,nx.SoLuongNhap,sp.MoTa,nx.NgayApDung FROM sanpham as sp,nhapxuat as nx where sp.MaSP=nx.MaSP and nx.GiaXuat = sp.DonGia and sp.MaSP=$id and nx.MaSP=$id";
  $query_update=mysqli_query($conn,$sql_update);
  $row_update=mysqli_fetch_assoc($query_update);
  if(isset($_POST['sbm'])){
    // $prd_id=$_POST['prd_id'];
    $prd_name=$_POST['prd_name'];
    if($_FILES['image']['name']==' '){

      $image1=$row_update['image'];
    }
    else{
      $image1=$_FILES['image']['name'];
      $image1_tmp=$_FILES['image']['tmp_name'];
      move_uploaded_file($image1_tmp,'./assets/images/images_product/'.$image1) ;

    }
    // $price=$_POST['price'];

    $price_input=$_POST['price_input'];
    $price_output=$_POST['price_output'];
    $date=$_POST['date'];
    $category_id=$_POST['category_id'];
    $input_quality=$_POST['input_quality'];
    $status1=$_POST['status'];
    $description=$_POST['description'];
    
    $sql_input_output_update ="UPDATE nhapxuat SET GiaNhap = '$price_input', GiaXuat = '$price_output', NgayApDung = '$date', SoLuongNhap = '$input_quality' where MaSP='$id'";
    $sql_QLSP_update = "UPDATE sanpham SET MaNCC='$prd_supplier', TenSP = '$prd_name', DonGia= '$price_output', HinhAnh = '$image1', MaDM= '$category_id', TrangThai= '$status1',MoTa='$description',SoLuongTon='$input_quality' where MaSP='$id'";
    $query_input_output_update=mysqli_query($conn,$sql_input_output_update);
    $query_QLSP_update=mysqli_query($conn,$sql_QLSP_update);
    echo "<script>window.location.href='./index.php?url=qlsanpham&page=1&kq1=$query_QLSP_update'</script>";
  }
?>
<div class="container-fluid">
   <div class="card-header">
       <h2>Sửa sản phẩm</h2>
   </div>
   <div class="card-body">
       <form method="POST" enctype="multipart/form-data" >
       <div class="form-group">
         <label for="">Mã sản phẩm</label>
         <input type="text" name="prd_id"class="form-control"   disabled   require value="<?php echo $row_update['MaSP']  ?>" >
        </div>
       <div class="form-group">
         <label for="">Mã nhà cung cấp</label>
         <input type="text" name="prd_supplier"class="form-control"   disabled   require value="<?php echo $row_update['MaNCC']  ?>" >
        </div>
       <div class="form-group">
         <label for="">Tên sản phẩm</label>
         <input type="text" name="prd_name"class="form-control" require value="<?php echo  $row_update["TenSP"] ?>" >
        </div>
        <div class="form-group">
          <label for="">Tên danh mục</label>
          <select class="form-control" name="category_id"style="height: calc(2.25rem + 14px);">
            <?php
              while($row_category=mysqli_fetch_array($query_category)){?>
                <option value="<?php echo $row_category['MaDM']; ?> "><?php echo $row_category['TenDM']; ?></option>
              <?php } ?>
          </select>
        </div>
           <div class="form-group">
             <label for="">Ảnh sản phẩm</label> <b>
             <input type="file" name="image" class=image-file >
           </div>
           <div class="form-group">
             <label for="">Giá Nhập</label>
             <input type="number" name="price_input"class="form-control" require value="<?php echo  $row_update["GiaNhap"]?>" id="price_input">
           </div>
           <div class="form-group">
             <label for="">Giá Xuất</label>
             <input type="number" name="price_output"class="form-control" require value="<?php echo  $row_update["GiaXuat"]?>" id="price_output" min="1">
           </div>
           <div class="form-group">
             <label for="">Số lượng nhập</label>
             <input type="text" name="input_quality"class="form-control" require value="<?php echo  $row_update['SoLuongNhap']?>" min="1">
           </div>
           <div class="form-group">
             <label for="">Ngày Áp Dụng</label>
             <input type="date" name="date" class="form-control" require value="<?php echo $row_update["NgayApDung"] ?>" min="<?php echo date("Y-m-d") ?>" >
           </div>
           <div class="form-group">
         <label for="">Trạng thái</label>
         <select class="form-control" name="status"style="height: calc(2.25rem + 14px);" require value="<?php echo $row_update['TrangThai']?>">
          
            <option value="1">Hiển thị</option>
            <option value="0">Ẩn</option>
          </select>
        
        </div>
        <div class="form-group">
             <label for="">Mô tả</label>
             <!-- <input type="text" name="input_quality"class="form-control"required > -->
             <textarea type="text" name="description"  class="form-control-description" require value="" ><?php echo  $row_update["MoTa"]; ?></textarea>
           </div>
           <button onclick="return Edit('<?php echo $row_update['MaSP']?>') "name="sbm" class="btn-add" type="submit">Sửa</button>
           <button onclick="goBack()" type="button" class="btn-back">Quay Về</button>
        </form>
   </div>
</div>
<script>
    function Edit(name){
      return confirm (`Bạn có chắc là muốn sửa sản phẩm: ${name} ?`)
    }
    function goBack(){
      window.location.href="./index.php?url=qlsanpham"
}
</script>