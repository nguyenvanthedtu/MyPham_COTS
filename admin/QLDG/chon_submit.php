<?php
include("connect.php");
$id = $_GET['id'];
$sql = "SELECT MaDG,MaSP,TenDangNhap,SoSao,NoiDung,NgayDG, CASE WHEN TrangThai='' THEN N'Hiện' ELSE N'Ẩn' END AS TrangThai  FROM danhgia WHERE MaDG = '$id'" ;
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);   	
if (mysqli_query($conn, $sql)) {
} else {
  echo "Error :" . mysqli_error($conn);
}
    if(isset($_POST["process"])){	
	$TenDangNhap = mysqli_escape_string($con,$_POST["TenDangNhap"]);
        $MaSP = mysqli_escape_string($con,$_POST["MaSP"]);
        $SoSao = mysqli_escape_string($con,$_POST["SoSao"]);
        $NgayDG = mysqli_escape_string($con,$_POST["NgayDG"]);
        $NoiDung = mysqli_escape_string($con,$_POST["NoiDung"]); 
    }                            
mysqli_close($conn);
?>