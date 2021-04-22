<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    
}
$username1 = $_SESSION['username'];
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $username = mysqli_real_escape_string($connection, $_POST['username1']);
 $sql = "UPDATE `login` SET username = '$username' WHERE username = '$username1'";
 $result = mysqli_query($connection, $sql);
 if($result){
  $_SESSION['username'] = $username;
 }else{

  $fmsg = "<div class='fmsg fmg'>تم ضبط محاولة دخول فاشلة وغير مصرح بها </div>";

  
 }
}
if(isset($_SESSION['username'])){
 $smsg = "<h1>تم التعديل</h1>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>مجموع الدرجات</title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="styles.css" >

 <!-- Latest compiled and minified JavaScript -->
 <script src="" ></script>

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="UTF-8" http-equiv="encoding">
    <link rel="stylesheet" href="css/stylesa.css">
    <link rel="icon" href="imgs/GE.png">
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">تعديل اسم المستخدم</h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"></span>
    <input type="text" name="username1" class="form-control" placeholder=" اسم المستخدم الجديد" required>
  </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block cat" type="submit">ارسال</button>
        <br><br>
      </form>
      <a href="logout"><button class="cat" type="submit">تسجيل الدخول</button></a>
</div>
</body>
</html>

</html>