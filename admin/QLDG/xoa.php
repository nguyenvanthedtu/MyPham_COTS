<?php
 include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM danhgia WHERE MaDG = '$id'";
$result= mysqli_query($conn,$sql);
if (mysqli_query($conn, $sql)) {
     echo "<script>window.location.href='./index.php?url=qldg&kq=2'</script>";
}
mysqli_close($conn);
?>
