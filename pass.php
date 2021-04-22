<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    $username1 = $_SESSION['username'];
}
error_reporting(0);

ini_set('display_errors', 0);

require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
    $password1 = ($_POST['password1']);
    $usernamee = mysqli_real_escape_string($connection, $_POST['username']);
    if($usernamee == $username1){
        $username = $usernamee;
    }else{
        $username = NULL;
    }
    if(intval($_POST['password']) && strlen($_POST['password']) >= 8){
        $password = ($_POST['password']);
      }else{
        $password = NULL;
      }

      $sql = "SELECT * FROM `login` WHERE username='$username'";
      $get_news_sql = "SELECT * FROM `login` WHERE username='$username'";
      $get_news_sql = mysqli_query($connection, $get_news_sql);
      if ($row = mysqli_fetch_array($get_news_sql)) {
      
      }
      $sf = $row['password'];
      if ($password1 == $sf){
        $sk=$sf;
      }else{
      }
 $sql = "UPDATE `login` SET password=$password WHERE username='$username' AND password='$sk'";
 $result = mysqli_query($connection, $sql);
 if($result){
  $_SESSION['password'] = $password;
}else{

if($password != NULL){
    $fmsg = '<h1 class="h1">فشل تعديل كلمة المرور او سبق تسجيله</h1>';
}
    
}
if($password == NULL){
    $fmsg = '<h1 class="h1">كلمة المرور غير صحيحه</h1><p> ملاحظه* يجب ان لايقل كلمة المرور عن اقل من  8 حروف او ارقام</p>';
}
if($username == NULL){
    $fmsg = '<h1 class="h1">اسم المستخدم غير صحيحه</h1>';
}
if($sk != $sf){
    $fmsg = "<h1 class='h1'>كلمة المرور الحالية غير صحيحه</h1>";
}
if(isset($_SESSION['password'])){
if($fmsg != true){
 $smsg = "<div class='smsg'><h1> تم التعديل </h1></div>";
}
}
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
        <h2 class="form-signin-heading">تعديل كلمة المرور</h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"></span>
    <input type="text" name="username" class="form-control" placeholder=" اسم المستخدم" required>
  </div>
  <input type="password" name="password1" class="form-control1" placeholder=" كلمة المرور  الحالية" required>
  <br>
    <input type="password" name="password" class="form-control" placeholder=" كلمة المرور  الجديده" required>
  </div>
  
        <br>
        <button class="btn btn-lg btn-primary btn-block cat" type="submit">ارسال</button>
        <br><br>
      </form>
      <a href="logout"><button class="cat" type="submit">تسجيل الدخول</button></a>
</div>