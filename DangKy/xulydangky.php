<?php
    session_start();
    include '../admin/connect.php';
    function taoma($input,$cdmxn)
    {   
        $cd=mb_strlen($input);
        $randomstr="";
        for($i=0;$i<$cdmxn;$i++)
        {   $randomkt=$input[mt_rand(0,$cd-1)];
            $randomstr .=$randomkt; 
        }
        return $randomstr;                                 
    }
    // Xu ly ajax
    if(isset($_POST['checkemail'])){
        $email = $_POST['checkemail'];
        $qr = "SELECT * FROM taikhoan where TenDangNhap='$email'";
        $result = mysqli_query($conn,$qr);
        if(mysqli_num_rows($result)>0) echo "Tài khoản đã tồn tại";
    }
    // -----------------------------------------
    if(isset($_POST['register'])){
        $username = $_POST['email'];
        $password = $_POST['password'];
        $password1 = $_POST['password-repeat'];
        $pass_hash = password_hash($password,PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $type_user = $_POST['type-user'];
        // Check user
        $qr = "SELECT * FROM taikhoan where TenDangNhap='$username'";
        $result = mysqli_query($conn,$qr);
        if(mysqli_num_rows($result)>0){             //Ton tai user
            // header("Location:./dangky.php?kq=0");
            echo "<script>alert('Email đã tồn tại!!!')</script>";
            echo "<script>window.history.back('./dangky.php')</script>";       
        }
        else {
            //Tao captcha
            $s='0123456789abcdefghyklmnopqrstuvwxyzABCDEFGHYKLMNOPQRSTUVWXYZ';          
            $captcha= taoma($s,4);   
            $_SESSION["verify"]=$captcha;
            $_SESSION["username-reg"]=$username;
            $_SESSION["password-reg"]=$pass_hash;
            $_SESSION["name-reg"]=$name;
            $_SESSION["gender-reg"]=$gender;
            $_SESSION["phone-reg"]=$phone;
            $_SESSION["add-reg"]=$address;
            $_SESSION["type-user"]=$type_user;
            //gui ma xac nhan qua email cho khach hang
            $to_email="$username";
            $subject="Gửi mã xác nhận đăng ký khách hàng mới";
            $body="Chào bạn, đây là mã xác nhận đăng ký của bạn: ".$captcha;
            $headers = "From: NDL\'s email";
            $result = mail($to_email,$subject,$body,$headers);
            echo $result;
            header("Location:./guimail.php");
       }   
    }
    // Thuc hien dang ky tai khoan
    if(isset($_GET["kq"])&&$_GET["kq"]==1){
        $user =  $_SESSION["username-reg"];
        $pass = $_SESSION["password-reg"];
        $name = $_SESSION["name-reg"];
        $gender = $_SESSION["gender-reg"];
        $phone = $_SESSION["phone-reg"];
        $address = $_SESSION["add-reg"];
        $type_user = $_SESSION["type-user"];
        if($type_user == "US"){
        $qr = "Insert into taikhoan values ('$user','$user','$pass','US',1,'$name','$gender','$phone','$address')";
        mysqli_query($conn,$qr);
        }
        else {
            $qr = "Insert into taikhoan values ('$user','$user','$pass','NCC',0,'$name','$gender','$phone','$address')";
            $qr1 = "Insert into nhacungcap(TenDangNhap,TenNCC,DiaChi,SDT) values ('$user','$name','$address','$phone')";
            mysqli_query($conn,$qr);
            mysqli_query($conn,$qr1);
        }
        header("Location:../DangNhap/dangnhap.php?kq=1");
    }
?>