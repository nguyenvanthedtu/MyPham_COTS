<?php
    include("../admin/connect.php");
    $tendangnhap = "";
    $id = "";
    $ma = "";
    $email="";
    $diachi="";
    $sex="";
    $hoten="";
    $trangthai="";
    $maloai="";
    $errors = array('sodienthoai'=>'', 'email'=>'');
    if(isset($_GET["id"])){
        $ma = $_GET['id'];
        $sql = "Select * from taikhoan where TenDangNhap = '$ma'";
        $old = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($old);
        $tendangnhap = $row[0];
        $email = $row[1];
        $maloai = $row[3];
        $trangthai = $row[4];
        $hoten = $row[5];
        $sex = $row[6];
        $sodienthoai = $row[7];
        $diachi = $row[8];    
    }
    if ( isset($_POST["submit"])){
        $tendangnhap = $_POST["tendangnhap"];
        $email = $_POST["email"];
        $hoten = $_POST["hoten"];
        $sex = $_POST["sex"];
        $sodienthoai = $_POST["sodienthoai"];
        $diachi = $_POST["diachi"];
        $maloai = $_POST["maloai"];
        $trangthai = $_POST["trangthai"];
        $flag=0;
        $flag1=0;
        if(strlen($sodienthoai)!=10){
            $errors['sodienthoai']='Bạn phải nhập đủ 10 số !!!';
            $flag=1;
        }else{
            $flag=0;
        }
        // if(empty($email)){
        //     $errors['email']='Bạn chưa nhập email !!!';
        //     $flag1=1;
        // }else{
        //     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        //         $errors['email']='Định dạng email chưa đúng !!!';
        //         $flag1=1;
        //     }else{
        //         $flag1=0;
        //     }
        // }
        if($flag == 0 && $flag1 == 0 ){
            $sql1="update taikhoan set Email = '$email' , MaLoai = '$maloai' , TrangThai = '$trangthai' , HoTen = '$hoten' , GioiTinh = '$sex' , SoDienThoai = '$sodienthoai' where TenDangNhap = '$tendangnhap'";
            $old1=mysqli_query($conn,$sql1);
            if( $old1>0){
                echo "<script>window.location.href='./index.php?url=QlTK&kq=2&page=1'</script>";
            }
        }      
    }
    else{
    }
    if ( isset($_POST['submit1'])){
        header("location:DsTK.php");
    }
?>