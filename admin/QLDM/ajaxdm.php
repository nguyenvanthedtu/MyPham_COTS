<?php
    include '../connect.php';
    if(isset($_POST['name'])){
        $sql = "select TenDM from danhmuc where TenDM='".$_POST['name']."'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0) echo "Tên khuyến mãi đã tồn tại";
    }
?>