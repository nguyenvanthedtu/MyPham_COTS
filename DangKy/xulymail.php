<?php
    session_start(); 
    if(isset($_POST['verify']))
    {
        if($_POST['code']==$_SESSION['verify'])
        header('Location:xulydangky.php?kq=1');
        else {
            echo "<script>alert('Mã xác thực chưa chính xác');</script>";
            echo "<script>window.history.back('./guimail.php')</script>"; 
        }
    }
?>