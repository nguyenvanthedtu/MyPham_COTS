<?php
    session_start();
    include '../admin/connect.php';
    // Xu ly ajax
    if(isset($_POST['checkemail'])){
        $email = $_POST['checkemail'];
        $qr = "SELECT * FROM taikhoan where TenDangNhap='$email'";
        $result = mysqli_query($conn,$qr);
        if(mysqli_num_rows($result)<1) echo "Email không tồn tại";
    }
    if(isset($_POST['quenmk'])){
        function taoma($input,$cdmxn)
        {   
         $cd=mb_strlen($input);
         $randomstr="";
         for($i=0;$i<$cdmxn;$i++)
        { $randomkt=$input[mt_rand(0,$cd-1)];
          $randomstr .=$randomkt; 
        }
        return $randomstr;                                 
        }
        //Tao captcha
        $s='0123456789abcdefghyklmnopqrstuvwxyzABCDEFGHYKLMNOPQRSTUVWXYZ';          
        $MatKhau= taoma($s,8);
        $email = $_POST['emailqmk'];
        $to_email="$email";
            $subject="Gửi mật khẩu mới cho khách hàng";
            $body="Chào bạn, đây là mật khẩu mới của bạn: ".$MatKhau."\nVui lòng đổi mật khẩu sau khi đăng nhập thành công!!!";
            $headers = "From: NDL\'s email";
            $result = mail($to_email,$subject,$body,$headers);

            $pass_hash = password_hash($MatKhau,PASSWORD_DEFAULT);
            $sql = "update TAIKHOAN set MatKhau='$pass_hash' where TenDangNhap='$email'";
            mysqli_query($conn,$sql);
            header("Location:../DangNhap/dangnhap.php?m=99");
           
    }
    if(isset($_POST["login"])){
        if($_POST["code"]!=null&&$_POST["code"]==$_SESSION["captcha"]){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Login Admin
        $sql = "SELECT TenDangNhap,MatKhau,HoTen,TrangThai,MaLoai from taikhoan where TenDangNhap='$username'";
        $kq = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($kq)>0){
            while($row = mysqli_fetch_array($kq)){
            $kq_pass = password_verify($password,$row["MatKhau"]);
            if($kq_pass==true){  
                if($row["TrangThai"]=="1"){
                   
                    if($row["MaLoai"]=="AD"){
                        $_SESSION["admin"] = $row["HoTen"];
                        $_SESSION["name-admin"] = $row["TenDangNhap"];
                        header("Location:../admin/index.php?ad=1");
                    }
                    else if($row["MaLoai"]=="NCC")
                    {
                        $_SESSION["admin-NCC"] = $row["HoTen"];
                        $sql1 = "SELECT MaNCC from nhacungcap where TenDangNhap='$username'";
                        $kq1 = mysqli_query($conn,$sql1);
                        $row = mysqli_fetch_row($kq1);
                        $_SESSION["MaNCC"] = $row[0];
                        header("Location:../admin/index.php?ad=2");
                    }
                    else {
                        $_SESSION["user"] = $row["TenDangNhap"];
                        header("Location:../index.php");
                    }
                }
                else {
                    header("Location:./dangnhap.php?kq=-2");  
                }
            }
            else {
                header("Location:./dangnhap.php?kq=0");
            }
        } 
        }
        
        // Login user
        
    }     
    else {
        header("Location:./dangnhap.php?kq=-1");
    }   
    }
        
        
    
    
?>