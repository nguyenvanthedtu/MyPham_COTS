<?php
    include("../admin/connect.php");
    
    $madm = $tendm = $trangthai = "";

    $errors = array('madm'=>'', 'tendm'=>'');

    if(isset($_POST['submit'])){
    
        $tendm = $_POST["tendm"];
        $trangthai = $_POST["trangthai"];

        $flag = 0;
        $flag1 = 0;
    
        

        if(empty($tendm)){

            $errors['tendm']='Bạn chưa nhập !!!';
            $flag1 = 1;
        }
        else{

            $sql="Select * from danhmuc where TenDM = '$tendm'";
            $old= mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($old)>0){

                $errors['tendm']='Tên danh mục đã tồn tại !!!';
                $flag1 = 1;
            }
            else{
                $flag1 = 0;
            }
        }
        
        if($flag == 0 && $flag1 == 0){
            
            $sql = "insert into danhmuc(TenDM,TrangThai) values( '$tendm' , '$trangthai')";
            $old = mysqli_query($conn,$sql);

            if($old>0){
                header("location:./index.php?url=qldm&kq=1");
            }    
        }
    
    }

    if(isset($_POST['submit1'])){
        header("location:DsDM.php");
    }

?>