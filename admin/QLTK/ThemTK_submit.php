<?php
    include("../admin/connect.php");
    $tendangnhap = ""; 
    $sodienthoai = "";
    $email = "";
    $matkhau = "";
    $hoten = "";
    $diachi = "";
    $errors = array('tendangnhap'=>'', 'sodienthoai'=>'','matkhau'=>'' , 'email'=>'');
    if ( isset($_POST["submit"]) ){

        $tendangnhap = $_POST["tendangnhap"];
        $matkhau = $_POST["matkhau"];
        $hoten = $_POST["hoten"];
        $sex = $_POST["sex"];
        $sodienthoai = $_POST["sodienthoai"];
        $diachi = $_POST["diachi"];
        $trangthai = $_POST["trangthai"];

        $flag=0;
        $flag1=0;


        if(empty($tendangnhap)){
            
            $errors['tendangnhap']='Bạn chưa nhập !!!';
            $flag=1;
        }else{

            $sql="Select * from taikhoan where TenDangNhap = '$tendangnhap'";
            $old= mysqli_query($conn,$sql);

            if( mysqli_num_rows($old)>0){

                $errors['tendangnhap']='Tên đăng nhập đã tồn tại !!!';
                $flag=1;

            }else{

                $flag=0;
            }
        }

        if(strlen($sodienthoai)!=10){

            $errors['sodienthoai']='Chưa đủ 10 số !!!';
            $flag1=1;

        }else{

            $flag1=0;
        }

        if($flag == 0 && $flag1 == 0){
            $matkhau1 = password_hash($_POST["matkhau"],PASSWORD_DEFAULT);
            $sql1="Insert into taikhoan  values ('$tendangnhap','','$matkhau1','AD','$trangthai','$hoten','$sex','$sodienthoai','$diachi')";
            $old1=mysqli_query($conn,$sql1);
        }
    }
    if ( isset($_POST['submit1'])){  
        header("location:./index.php?url=QlTK");
    }
?>