<?php
    include ("../admin/connect.php");

    $id = "";
    $ma = "";
    $matkhaucu = "";
    $matkhaumoi = "";
    $rematkhaumoi = "";

    $errors = array('matkhaucu'=>'', 'matkhaumoi'=>'' , 'rematkhaumoi'=>'');

    if(isset($_GET["id"])){

        $ma = $_GET['id'];
        $sql = "Select * from taikhoan where TenDangNhap = '$ma'";
        $old = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($old);
        $tendangnhap = $row[0];
    }

    if(isset($_POST["submit"])){

        $tendangnhap = $_POST["tendangnhap"];
        $matkhaucu = $_POST["matkhaucu"];
        $matkhaumoi = $_POST["matkhaumoi"];
        $rematkhaumoi = $_POST["rematkhaumoi"];

        $flag = 0;
        $flag1 = 0;
        $flag2 = 0;

        if(empty($matkhaucu)){

            $errors['matkhaucu'] = 'Bạn chưa nhập !!!';
            $flag = 1;

        }else{

            $sql = "Select * from taikhoan where TenDangNhap = '$tendangnhap'";
            $old = mysqli_query($conn,$sql);
            $row = mysqli_fetch_row($old);
            $matkhaucu1 = $row[2];
            if(password_verify($matkhaucu,$matkhaucu1)){
                
                $errors['matkhaucu'] = 'Mật khẩu cũ chưa đúng !!!'; 
            
            }else{

                $flag=0; 
            }
        }

        if(empty($matkhaumoi)){

            $errors['matkhaumoi'] = 'Bạn chưa nhập !!!';
            $flag1 = 1;

        }else{

            if(strlen($matkhaumoi)<8){

                $errors['matkhaumoi']='Chưa đủ 8 ký tự !!!';
                $flag1 = 1;

            }else{

                $flag1=0;
            }
        }

        if(empty($rematkhaumoi)){

            $errors['rematkhaumoi'] = 'Bạn chưa nhập !!!';
            $flag2 = 1;

        }else{

            if($rematkhaumoi != $matkhaumoi){

                $errors['rematkhaumoi']='Nhập lại chưa đúng !!!';
                $flag2 = 1;

            }else{

                $flag2 = 0;
            }
        }

        if($flag == 0 && $flag1 == 0 && $flag2 == 0){
            $matkhaumoi = password_hash($matkhaumoi,PASSWORD_DEFAULT);    
            $sql1="update taikhoan set MatKhau = '$matkhaumoi' where TenDangNhap = '$tendangnhap' ";
            $old1=mysqli_query($conn,$sql1);

            if($old1 > 0){
                echo "<script>window.location.href='./index.php?url=QlTK&kq=4&page=1'</script>";
            }
        }
    }
    
    if ( isset($_POST['submit1'])){

        header("location:./QuanLyTK/DsTK.php");
    }
?>