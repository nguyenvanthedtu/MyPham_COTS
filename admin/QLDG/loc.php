<?php
 include("connect.php");
if(isset($_POST['sbm'])){
                $fromdate = $_POST['fromdate'];
                $todate = $_POST['today'];
                $sql1 = "select * from danhgia where NgayDG between date('$fromdate') and date('$todate')";
                $result = mysqli_query($conn,$sql1);
if(mysqli_query($conn, $sql1)){
  
}else {
  echo "Error " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>