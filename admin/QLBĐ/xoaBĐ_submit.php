<?php 
    include("../admin/connect.php");
    if(isset($_GET["id"])){
        $id=$_GET['id'];
        $sql="Delete from baidang where IdBai = '$id'";
        $kq=mysqli_query($conn,$sql);
        if($kq>0){
            header("location:./index.php?url=DSBĐ&kq=3");
            //echo "<script>window.location.href='./index.php?url=DSBĐ&kq=3&page=1'</script>";
        }
    }
?>