<?php
    include '../connect.php';
    if(isset($_POST['name'])){
        $sql = "select TenKM from khuyenmai where TenKM='".$_POST['name']."'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0) echo "Tên khuyến mãi đã tồn tại";
    }
?>