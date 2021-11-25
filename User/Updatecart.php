<?php
    session_start();
   $_SESSION['cart'];   
   if(isset($_POST['btnUpdate']))
       {
        foreach ($_POST['soluong'] as $key => $val) {
            $_SESSION['cart'][$key]['sl']=$val;
        }
   }
   header("Location:./list_cart.php");
?>
