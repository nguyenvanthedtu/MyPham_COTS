<?php
    include '../connect.php';
    if(isset($_POST['name'])){
        $sql = "select TenNCC from nhacungcap where TenNCC='".$_POST['name']."'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0) echo "Tên nhà cung cấp đã tồn tại";
    }
?>