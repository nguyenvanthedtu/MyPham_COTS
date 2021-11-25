<?php
    session_start();
    include '../admin/connect.php';
    if(isset($_POST['submit'])){
        $matkhaucu = $_POST['matkhaucu'];
        $matkhaumoi = $_POST['matkhaumoi'];
        $rematkhaumoi = $_POST['rematkhaumoi'];
        $tendangnhap = $_SESSION['user'];
        $flag = 1;
        
            $sql = "Select * from taikhoan where TenDangNhap = '$tendangnhap'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_row($old);
            $matkhaucu1 = $row[2];
            if(password_verify($matkhaucu,$matkhaucu1)==false){
                $flag=0;
                echo "<script>alert('Mật khẩu không khớp')<script>";
            }
         if($flag==1) {
            $matkhaumoi = password_hash($matkhaumoi,PASSWORD_DEFAULT);    
            $sql ="update taikhoan set MatKhau = '$matkhaumoi' where TenDangNhap = '$tendangnhap' ";
            $result=mysqli_query($conn,$sql);
            if($result > 0){
                echo "<script>window.location.href='./user.php?rs=2'</script>";
            }
         }   
    }
?>