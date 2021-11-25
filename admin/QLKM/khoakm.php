<?php
include '../admin/connect.php';
 if(isset($_GET['id'])){
    $qr1 = "select TuNgay from khuyenmai where MaKM='".$_GET['id']."'";
    $result1 = mysqli_query($conn,$qr1);
    while ($row = mysqli_fetch_array($result1)){
        $date = $row["TuNgay"];
    }
    $new_date = strtotime ('-1 day',strtotime ($date));
    $new_date = date ('Y-m-d',$new_date);
    echo var_dump($new_date);
    $qr2 = "update khuyenmai set DenNgay='$new_date' where MaKM='".$_GET['id']."'";
    $result2 = mysqli_query($conn,$qr2);
    if($result2>0) echo "<script>window.location.href='./index.php?url=khuyenmai'</script>";
}
?>