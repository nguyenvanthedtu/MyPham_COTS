<?php 
    include "./connect.php";
    $id=$_GET['id'];
    $sql="Delete From taikhoan where MaNCC=$id";
    $query=mysqli_query($conn,$sql);
    echo "<script>window.location.href='./index.php?url=dskh&page=1&kq=2'</script>"; 
?>
