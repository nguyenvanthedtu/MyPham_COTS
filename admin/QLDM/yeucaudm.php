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
    <h1 class="title">DANH SÁCH DANH MỤC HIỆN CÓ</h1>
    <table class="table table-hover table-qldm" style="margin-left:16%">
        <tr class="table-success">
            <th>STT</th>
            <th>Mã danh mục</th>
            <th style="width: 35%;">Tên danh mục</th>
        </tr>
   
    <?php
        include "../admin/connect.php";
        $sql = "select * from danhmuc where TrangThai!='2'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $count = 0;        
        while($row = mysqli_fetch_assoc($result) ){
            $count++;
    ?>
        <tr>
            <td><?php echo $count ?></td>
            <td><?php echo $row["MaDM"] ?></td>
            <td><?php echo $row["TenDM"] ?></td>
        </tr>        
    <?php } }  ?>
        
            
    <button class="btn btn-secondary btn-themdm" type="submit" onclick="myFunction()" style="transform: translateY(215px);width:20%">Yêu cầu thêm mới </button> 
            
    </table>
    </div>
</body>
</html>

<script>
    function myFunction(){
        location.replace("./index.php?url=xulydm");
    }

</script>

<?php if(isset($_GET['kq'])&&$_GET['kq']==1) {?>
        <script>swal("","Yêu cầu thêm thành công! Vui lòng chờ duyệt!","success")</script>
<?php } ?>
