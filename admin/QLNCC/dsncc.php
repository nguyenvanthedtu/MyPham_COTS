<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link  rel="stylesheet" href="./assets/css/QLDM/qldm.css"/>
</head>
<body>
    <div class="container-qldm">
    <h1 class="title">DANH SÁCH NHÀ CUNG CẤP</h1>
    <table class="table table-hover table-qldm" style="width:800px">
        <tr class="table-success">
            <th>STT</th>
            <th>Mã NCC</th>
            <th>Tên NCC</th>
            <th>Địa chỉ</th>
            <th>SĐT</th>
            <th>Trạng thái</th>
            <th style="width: 21%;">Xử lý</th>
        </tr>
   
    <?php
        include "../admin/connect.php";
        $sql = "select * from taikhoan tk, nhacungcap ncc where tk.tendangnhap=ncc.tendangnhap";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $count = 0;        
        while($row = mysqli_fetch_assoc($result) ){
            $count++;
    ?>
        <tr>
            <td><?php echo $count ?></td>
            <td><?php echo $row["MaNCC"] ?></td>
            <td><?php echo $row["TenNCC"] ?></td>
            <td><?php echo $row["DiaChi"] ?></td>
            <td><?php echo $row["SDT"] ?></td>
            <td><?php echo($row["TrangThai"] == 0)?  "Chờ duyệt": "Đã duyệt" ?></td>
            <td>
             <?php if ($row["TrangThai"]==0){?>
                <a href="./index.php?url=ncc&rol=1&id=<?php echo $row["TenDangNhap"];?>" class="btn btn-success"><i class="far fa-check-circle"></i></a>
                <?php }?>
                <a href="./index.php?url=suancc&id=<?php echo $row["MaNCC"];?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                <a href="./index.php?url=ncc&rol=2&id=<?php echo $row["TenNCC"];?>" class="btn btn-danger" onclick="return xoa('<?php echo $row['TenNCC'];?>')"><i class="fas fa-times"></i></a>
            </td>
        </tr>        
    <?php } }  ?>
    </table>
    </div>
</body>
</html>

<script>
    function xoa(name){
        return confirm("Bạn có muốn xóa nhà cung cấp : "+ name +" ?");
    }
</script>

<?php if(isset($_GET['kq'])&&$_GET['kq']==1) {?>
        <script>swal("","Duyệt thành công","success")</script>
<?php } ?>

<?php if(isset($_GET['kq'])&&$_GET['kq']==2) {?>
        <script>swal("","Cập nhật thành công","success")</script>
<?php } ?>

<?php if(isset($_GET['kq'])&&$_GET['kq']==3) {?>
        <script>swal("","Xóa thành công","success")</script>
<?php } ?>