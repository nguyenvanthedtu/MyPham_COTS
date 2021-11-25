<?php
    include ("./connect.php");
    $id=$_GET['id'];
        $sql="Delete from taikhoan where TenDangNhap = '$id'";
        $old=mysqli_query($conn,$sql);
        if($old>0){
            echo "<script>window.location.href='./index.php?url=QlTK&kq=3&page=1'</script>";
        }
        
    

?>