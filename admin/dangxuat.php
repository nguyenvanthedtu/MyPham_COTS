<?php
    if(isset($_SESSION["admin"]))
    unset($_SESSION['admin']);
    if(isset($_SESSION["name-admin"]))
    unset($_SESSION["name-admin"]);
    if(isset($_SESSION["admin-NCC"]))
    unset($_SESSION['admin-NCC']);
    if(isset($_SESSION["MaNCC"]))
    unset($_SESSION['MaNCC']);
    echo "<script>window.location.href='../DangNhap/dangnhap.php'</script>"
?>