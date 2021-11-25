<?php
    include("../admin/connect.php");
    
    $madm = $tendm = $trangthai = "";

    $errors = array('tendm'=>'');

    if(isset($_GET["id"])){

        $ma = $_GET['id'];
        $sql = "Select * from danhmuc where MaDM = '$ma'";
        $old = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($old);
        //echo $ma;
        //echo "<prE>";
        //print_r($row);
        $madm = $row[0];
        $tendm = $row[1];
        $trangthai = $row[2];
    }

    if(isset($_POST['submit'])){
    
        $madm = $_POST["madm"];
        $tendm = $_POST["tendm"];
        $trangthai = $_POST["trangthai"];

        $flag1 = 0;

        if(empty($tendm)){

            $errors['tendm']='Bạn chưa nhập !!!';
            $flag1 = 1;
        }
        
        if($flag1 == 0){
            $sql1 = "update danhmuc set  TenDM = '$tendm' , TrangThai =  '$trangthai' where MaDM = '$madm'";
            $old1 = mysqli_query($conn,$sql1);
             
        }
    
    }
    

  
?>