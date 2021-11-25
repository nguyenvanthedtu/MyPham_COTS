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


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql="Select * from baidang where IdBai= '$id'";
        $old=mysqli_query($conn,$sql);
        $row=mysqli_fetch_row($old);
        $tieude= $row[1];
        $chuyenmuc = $row[2];
        $ngaydang=$row[3];
        $hinhanh= $row[4];
        $noidung = $row[5];
        $trangthai=$row[6];
    }

    if(isset($_POST["submit"])){

        $tieude = $_POST["tieude"];
        $chuyenmuc = $_POST["chuyenmuc"];
        $noidung = $_POST["noidung"];
        $trangthai = $_POST["trangthai"];
        $ngaydang = $_POST["ngaydang"];
        $hinhanh = $_POST["hinhanh"];
        $tendangnhap=$_SESSION["name-admin"];


        $flag=0;
        $flag1=0;
        $flag2=0;

        if(empty($tieude)){
            
            $errors['tieude']='Bạn chưa nhập !!!';
            $flag=1;
        }else{

            $sql="Select * from baidang where TieuDe = '$tieude'";
            $old= mysqli_query($conn,$sql);

            if( mysqli_num_rows($old)>0){

                $errors['tieude']='Tiêu đề đã tồn tại !!!';
                $flag=1;

            }else{
                $flag=0;
            }
        }

        if(empty($chuyenmuc)){
            
            $errors['chuyenmuc']='Bạn chưa nhập !!!';
            $flag1=1;
        }else{
            $flag1=0;
        }

        if(empty($noidung)){
            
            $errors['noidung']='Bạn chưa nhập !!!';
            $flag2=1;
        }else{
            $flag2=0;
        }
        
        if($flag==0 && $flag1==0 && $flag2 ==0 ){
            $sql1 = "update baidang set TieuDe='$tieude',ChuyenMuc='$chuyenmuc',NgayDang='$ngaydang',HinhAnh='$hinhanh'
                    ,NoiDung='$noidung',TrangThai='$trangthai',TenDangNhap='$tendangnhap' where IdBai = '$id'";
            $old1 =mysqli_query($conn,$sql1);
            if( $old1>0){
                header("location:./index.php?url=DSBĐ&kq=2");
                //echo "<script>window.location.href='./index.php?url=DSBĐ&kq=1&page=1'</script>";
            }
        }

    }

?>