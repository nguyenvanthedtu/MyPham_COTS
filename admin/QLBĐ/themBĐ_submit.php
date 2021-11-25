<?php 
    include("../admin/connect.php");
    $tieude = ""; 
    $chuyenmuc = "";
    $noidung = "";
    $hinhanh="";
    $ngaydang="";
    $trangthai="";
    $hinhanh="";
    $tendangnhap="";
   
    $errors = array('tieude'=>'', 'chuyenmuc'=>'','noidung'=>'');

    if(isset($_POST["submit"])){
        $tieude = $_POST["tieude"];
        $chuyenmuc = $_POST["chuyenmuc"];
        $noidung = $_POST["noidung"];
        $trangthai = $_POST["trangthai"];
        $ngaydang = $_POST["ngaydang"];
        $hinhanh = $_POST["hinhanh"];
        $tendangnhap=$_SESSION["name-admin"] ;

            $sql="Select * from baidang where TieuDe = '$tieude'";
            $old= mysqli_query($conn,$sql);

            if( mysqli_num_rows($old)>0){

                $errors['tieude']='Tiêu đề đã tồn tại !!!';

            }else{
                $sql1 = "insert into baidang values ('','$tieude','$chuyenmuc','$ngaydang','$hinhanh','$noidung','$trangthai','$tendangnhap') ";
                $old1 =mysqli_query($conn,$sql1);
            }
    }
?>