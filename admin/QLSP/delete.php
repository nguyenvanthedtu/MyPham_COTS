<?php 
    include "./connect.php";
    $id=$_GET['id'];
    $sql="Delete From nhapxuat where MaSP=$id";
    $query=mysqli_query($conn,$sql);
    echo "<script>window.location.href='./index.php?url=qlsanpham&page=1&kq=2'</script>"; 
?>
