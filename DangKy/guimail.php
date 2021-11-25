<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dangky.css"/>
    <title>Xác thực email</title>
</head>
<body>
    <?php session_start(); ?>
    <form method="post" action="./xulymail.php">
    <div class="mail">
<hr>
    <label><b>Mã xác thực đã gửi đến mail:<b style="color:red;font-size:larger"> <?php if(isset($_SESSION['username-reg'])) echo $_SESSION['username-reg'];?></b></b></label>
    </br></br>
    <label><b>Nhập mã xác thực</b></label>
    <input type="text" placeholder="Nhập mã xác thực" name="code" id="code" required>
    <input name="verify" type="submit" value="Xác thực" class="verify-mail"/>
<hr>
</div>
    </form>
</body>
</html>